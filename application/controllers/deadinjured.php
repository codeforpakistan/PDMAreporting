<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deadinjured extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            $is_logged_in = $this->session->userdata('is_logged_in');
            if(!$is_logged_in)
            	redirect('login');
            
       }
	public function index(){
		
	}
	public function check_both(){
		$is_ad = $this->session->userdata('is_ad');
		$is_mis = $this->session->userdata('is_mis');
		if(!$is_ad && !$is_mis)
			redirect('dataentry/dashboard');
	}
	public function check_mis(){
		$is_mis = $this->session->userdata('is_mis');
		if(!$is_mis)
			redirect('login');
	}
	public function data(){
		$this->check_both();
		$this->load->view('data_tables/tables');
	}

	public function edit($id){
		$this->check_mis();
		$this->load->model('deadinjured_model');
		$data['data']= $this->deadinjured_model->get_by_id($id);
		$data['budget'] = $this->db->get('budget')->result();
		$this->load->view('edit_forms/dead_injured', $data);
	
	}
	public function update(){
		$this->check_mis();
		$this->load->model('deadinjured_model');
		$this->deadinjured_model->update();
		redirect('deadinjured/data');
	}
	/**
	 * *********************** API proced **********************
	 */
	public function get_by_id($id){
		$this->load->model('deadinjured_model');
		$data = $this->deadinjured_model->get_by_id($id);
		echo json_encode($data);
	}

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
