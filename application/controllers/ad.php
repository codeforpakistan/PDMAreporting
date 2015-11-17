<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad extends CI_Controller {
	
	public function dashboard()
	{
		$this->load->view('ad_dashboard');
	}
}