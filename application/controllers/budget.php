<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends CI_Controller {
	public function index(){
		
	}
	public function data(){
		$this->load->view('data_tables/budget');
	}
	
	/**
	 * *********************** API proced **********************
	 */
	public function edit(){
		$postdata = file_get_contents("php://input");
		$formdata = json_decode($postdata);
		
		$response = [];

		$this->load->model('budget_model');


		if($this->budget_model->edit($formdata)){
			$response['done'] = true;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}
	}
	public function getbudget(){
		$result = $this->db->get('budget')->result_array();
		echo json_encode($result);
	}
	public function get_by_id($id){
		$this->load->model('budget_model');
		$data = $this->budget_model->get_by_id($id);
		echo json_encode($data);
	} 

	public function add(){
		$postdata = file_get_contents("php://input");
		$formdata = json_decode($postdata);
		
		$response = [];

		$this->load->model('budget_model');
		
		if($this->budget_model->add($formdata)){
			$response['done'] = true;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}

	}
}
