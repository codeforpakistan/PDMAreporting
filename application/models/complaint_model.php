<?php
class Complaint_model extends CI_Model{
	
	public function get_by_id($id){

		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where('cm_id',$id);
		$return = $this->db->get()->result_array();

		return $return[0];
	}
	public function update($formdata){

		$name = $formdata->name;
		$fathername = $formdata->father_name;
		$cnicnumber = $formdata->cnic;
		$address = $formdata->address;
		$district = $formdata->district;
		$reason = $formdata->reason;
		$cm_id = $formdata->cm_id;
		$user_id = $this->session->userdata('user_id');

		$data = array(	'name' => $name,
						'cnic'	=> $cnicnumber,
		 				'father_name' => $fathername,
		 				'address'	=> $address,
		 				'reason'	=> $reason,
		 				'district' => $district,
		 				'u_id'	=> $user_id);

		$this->db->where('cm_id', $cm_id);

		if($this->db->update('complaint', $data)){
			return true;
		}
		else{
			return false;
		}
	}
	public function add($formdata){
		$name = $formdata->name;
		$fathername = $formdata->fathername;
		$cnicnumber = $formdata->cnicnumber;
		$address = $formdata->address;
		$district = $formdata->district;
		$reason = $formdata->reason;
		$user_id = $this->session->userdata('user_id');


		$data = array(	'name' => $name,
						'cnic'	=> $cnicnumber,
		 				'father_name' => $fathername,
		 				'address'	=> $address,
		 				'reason'	=> $reason,
		 				'district' => $district,
		 				'u_id'	=> $user_id);
		$response = [];
		if($this->db->insert('complaint', $data)){
			$response['done'] = true;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}
	}
}