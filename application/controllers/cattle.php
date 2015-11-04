<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cattle extends CI_Controller {
	public function index(){
		
	}
	public function add(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);
		$this->load->model('cattle_model');
		$return = $this->cattle_model->add($data);
		return $return;

	}
	public function add2($id){
		echo json_encode($id);
	}
}
