<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deadinjured extends CI_Controller {
	public function index(){
		
	}
	public function add(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);

		$this->load->model('deadinjured_model');
		$return = $this->deadinjured_model->add($data);
		return $return;

	}
	public function add2($id){
		echo json_encode($id);
	}
}
