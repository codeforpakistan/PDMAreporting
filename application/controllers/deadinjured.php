<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deadinjured extends CI_Controller {
	public function index(){
		
	}
	public function data(){
		$this->load->view('data_tables/tables');
	}
	/**
	 * *********************** API proced **********************
	 */
	public function get_all(){
		$this->db->select('*');
		$this->db->from('dead_injured');
		$this->db->join('budget', 'budget.b_id = dead_injured.b_id');
		$this->db->join('user', 'user.u_id = dead_injured.u_id');
		$result  = $this->db->get()->result_array();
		echo json_encode($result);
	}
	public function add(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);

		$this->load->model('deadinjured_model');
		$return = $this->deadinjured_model->add($data);
		return $return;

	}
}
