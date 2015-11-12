<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class House extends CI_Controller {
	public function index(){
		
	}
	public function add(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);
		$this->load->model('house_model');
		$return = $this->house_model->add($data);
		return $return;

	}
	
}
