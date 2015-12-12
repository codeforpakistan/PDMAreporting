<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataentry extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            $is_logged_in = $this->session->userdata('is_logged_in');
            if(!$is_logged_in)
            	redirect('login');
            
       }
	public function dashboard()
	{
		$this->load->view('dataentry_dashboard');
	}
	public function deadinjured(){
		$this->load->view('data_entry_forms/deadinjured');
	}
	public function cattles(){
		$this->load->view('data_entry_forms/cattles');
	}
	public function housedamage(){
		$this->load->view('data_entry_forms/housedamage');
	}
}
