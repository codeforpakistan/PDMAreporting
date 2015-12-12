<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            $is_logged_in = $this->session->userdata('is_logged_in');
            if(!$is_logged_in)
            	redirect('login');
            
       }

      public function check_mis(){
            $is_mis = $this->session->userdata('is_mis');
            if(!$is_mis)
                  redirect('login');
      }
	public function dashboard()
	{
            $this->check_mis();
		$this->load->view('mis_dashboard');
	}
}