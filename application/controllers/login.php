<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index($invalid_credentials = false)
	{
		$data = array(	'invalid_credentials' 	=> $invalid_credentials);

		$this->load->view('login',$data);
	}

	public function authenticate(){

		$user_name 	= $this->input->post('username');
		$password	= $this->input->post('password');
		$category	= $this->input->post('category');
		//$where = "(u_username=$user_name || u_email=$user_name) && u_password=$password";

		$sql = "SELECT * FROM user WHERE (u_username = ? OR u_email = ?) AND u_password = ? AND u_category = ?"; 
		$password = md5($password);
		$q = $this->db->query($sql, array($user_name, $user_name, $password, $category));
		$row = $q->row();
		if($q->num_rows()==1){
			// if 1, then MIS
			if($row->u_category=="MIS User"){
				$data = array(	'is_logged_in' 			=> true,
								'is_mis'				=> true,
						 		'user_id'				=> $row->u_id,
						 		'user_name'				=> $row->u_username);
				/*---------------------- save data in session ------------------------- */
				$this->session->set_userdata($data);
				redirect('mis/dashboard');
			}
			// if 2, then AD
			else if($row->u_category=="Assistant Director"){
				$data = array(	'is_logged_in' 			=> true,
								'is_ad'					=> true,
						 		'user_id'				=> $row->u_id,
						 		'user_name'				=> $row->u_username);
				/*---------------------- save data in session ------------------------- */
				$this->session->set_userdata($data);
				redirect('ad/dashboard');
			}
			else{
				$data = array(	'is_logged_in' 				=> true,
								'is_data_entry_operator'	=> true,
						 		'user_id'					=> $row->u_id,
						 		'user_name'					=> $row->u_username);
				/*---------------------- save data in session ------------------------- */
				$this->session->set_userdata($data);
				redirect('dataentry/dashboard');
			}
		}
		else{
			$this->index(true);
		}
	}
}
