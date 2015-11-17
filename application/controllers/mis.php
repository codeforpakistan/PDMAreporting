<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis extends CI_Controller {
	
	public function dashboard()
	{
		$this->load->view('mis_dashboard');
	}
}