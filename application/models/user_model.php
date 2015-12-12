<?php
class User_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('u_id',$id);
		$return = $this->db->get('user')->result_array();
		return $return[0];
	}
	public function edit_category($formdata){
		$u_category = $formdata->u_category;
		$id = $formdata->u_id;

		$data = array('u_category' => $u_category);
		$this->db->where('u_id', $id);
		$response = [];
		if($this->db->update('user', $data)){
			$response['done'] = true;
			echo json_encode($response);
		}

	}
	public function add($formdata){

		$fullname = $formdata->fullname;
		$username = $formdata->username;
		$password = $formdata->password;
		$emailaddress = $formdata->emailaddress;
		$category = $formdata->category;

		$data = array(	'u_fullname' => $fullname,
						'u_username'	=> $username,
		 				'u_password' => $password,
		 				'u_email' => $emailaddress,
		 				'u_category' => $category);
		$response = [];
		if($this->db->insert('user', $data)){
			$response['done'] = true;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}
	}
}