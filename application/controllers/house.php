<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class House extends CI_Controller {
	public function index(){
		
	}
	public function data(){
		$this->load->view('data_tables/tables');
	}

	public function edit($id){
		echo "id";
		$this->load->model('house_model');
		$data= $this->house_model->get_by_id($id);
		print_r($data);
	}
	/**
	 * *********************** API proced **********************
	 */

	public function get_by_id($id){
		$this->load->model('house_model');
		$data = $this->house_model->get_by_id($id);
		echo json_encode($data);
	}

	public function get_all(){
		$this->db->select('*');
		$this->db->from('house_damage');
		$this->db->join('budget', 'budget.b_id = house_damage.b_id');
		$this->db->join('user', 'user.u_id = house_damage.u_id');
		$result  = $this->db->get()->result_array();
		echo json_encode($result);
	}
	public function add(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);
		$this->load->model('house_model');
		$return = $this->house_model->add($data);
		return $return;

	}
	
}
