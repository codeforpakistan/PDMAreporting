<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            $is_logged_in = $this->session->userdata('is_logged_in');
            if(!$is_logged_in)
            	redirect('login');
            
       }
       public function check_both(){
            $is_ad = $this->session->userdata('is_ad');
            $is_mis = $this->session->userdata('is_mis');
            if(!$is_ad && !$is_mis)
                  redirect('dataentry/dashboard');
      }
	public function dashboard()
	{
            $this->check_both();
		$this->load->view('ad_dashboard');
	}
}