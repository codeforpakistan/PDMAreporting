<?php
class Complaint_model extends CI_Model{
	
	public function get_by_id($id){

		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where('cm_id',$id);
		$this->db->join('budget', 'budget.b_id = complaint.b_id');
		$return = $this->db->get()->result_array();

		return $return[0];
	}
	public function update(){

		$name = $this->input->post('name');
		$fathername = $this->input->post('fathername');
		$cnicnumber = $this->input->post('cnicnumber');
		$district = $this->input->post('district');
		$address = $this->input->post('address');
		$reason = $this->input->post('reason');
		$ct_id = $this->input->post('cm_id'); 
		$user_id = $this->session->userdata('user_id');

		$form_data = array(	'name' => $name,
							'father_name' => $fathername,
							'cnicnumber' => $cnicnumber,
							'district' => $district,
							'address' => $address,
							'reason' => $reason,
							'u_id'	=> $user_id );

		$this->db->where('cm_id', $cm_id);
		$this->db->update('complaint', $form_data);
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