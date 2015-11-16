<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cattle extends CI_Controller {
	public function index(){
		
	}
	public function data(){
		echo 'load table page';
	}
	/**
	 * *********************** API proced **********************
	 */
	public function get_all(){
		$this->db->select('*');
		$this->db->from('cattle');
		$this->db->join('budget', 'budget.b_id = house_damage.b_id');
		$this->db->join('user', 'user.u_id = house_damage.u_id');
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
