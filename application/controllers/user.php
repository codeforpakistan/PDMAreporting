<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function data()
	{
		$this->load->view('data_tables/users');
	}



	/**
	 * *********************** API proced **********************
	 */
	public function edit_category(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);
		$this->load->model('user_model');
		$return = $this->user_model->edit_category($data);
		return $return;
	}
	public function get_by_id($id){
		$this->load->model('user_model');
		$data = $this->user_model->get_by_id($id);
		echo json_encode($data);
	}
	public function get_all(){
		$result = $this->db->get('user')->result_array();
		echo json_encode($result);
	}
}