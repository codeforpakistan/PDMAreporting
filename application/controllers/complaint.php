<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint extends CI_Controller {
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

		$this->load->view('data_tables/complaint');
	}

    public function edit($id){
		
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);
		$this->load->model('complaint_model');
		$return = $this->complaint_model->update($data);
		return $return;
	}
	public function update(){
		$this->check_mis();

		$this->load->model('complaint_model');
		$this->complaint_model->update();
		redirect('complaint/data');
	}



	/**
	 * *********************** API proced **********************
	 */
	public function get_by_id($id){
		$this->load->model('complaint_model');
		$data = $this->complaint_model->get_by_id($id);
		echo json_encode($data);
	} 
	public function get_all(){
		$result = $this->db->get('complaint')->result_array();
		
		echo json_encode($result);
	}

	
	public function add(){
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata);
		$this->load->model('complaint_model');
		$return = $this->complaint_model->add($data);
		return $return;
	}


}
