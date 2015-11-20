<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cattle extends CI_Controller {
	public function index(){
		
	}
	public function data(){
		$this->load->view('data_tables/tables');
	}

    public function edit($id){
		$this->load->model('cattle_model');
		$data['data']= $this->cattle_model->get_by_id($id);
		$data['budget'] = $this->db->get('budget')->result();
		$this->load->view('edit_forms/cattle', $data);
	}



	/**
	 * *********************** API proced **********************
	 */
	public function get_by_id($id){
		$this->load->model('cattle_model');
		$data = $this->cattle_model->get_by_id($id);
		echo json_encode($data);
	} 
	public function get_all(){
		$this->db->select('*');
		$this->db->from('cattle');
		$this->db->join('budget', 'budget.b_id = cattle.b_id');
		$this->db->join('user', 'user.u_id = cattle.u_id');
		$result  = $this->db->get()->result_array();
		echo json_encode($result);

	}
	public function add(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);
		$this->load->model('cattle_model');
		$return = $this->cattle_model->add($data);
		return $return;

	}

}
