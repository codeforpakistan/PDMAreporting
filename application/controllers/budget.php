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

	public function getbudget(){
		$result = $this->db->get('budget')->result_array();
		echo json_encode($result);
	}

	public function add(){
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		$name = $request->name;
		$fathername = $request->fathername;
		$data = array(	'u_username' => $name,
		 				'u_fullname' => $fathername);
		$response = [];
		if($this->db->insert('user', $data)){
			$response['done'] = true;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}

	}
}
