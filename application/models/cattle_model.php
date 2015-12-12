<?php
class Cattle_model extends CI_Model{
	
	public function get_by_id($id){

		$this->db->select('*');
		$this->db->from('cattle');
		$this->db->where('ct_id',$id);
		$this->db->join('budget', 'budget.b_id = cattle.b_id');
		$return = $this->db->get()->result_array();

		return $return[0];
	}
	public function update(){

		$name = $this->input->post('name');
		$fathername = $this->input->post('fathername');
		$incidentdate = $this->input->post('incidentdate');
		$cnicnumber = $this->input->post('cnicnumber');
		$district = $this->input->post('district');
		$address = $this->input->post('address');
		$reason = $this->input->post('reason');
		$budget = $this->input->post('budget');
		$cattletype = $this->input->post('cattletype');
		$halqapatwari = $this->input->post('halqapatwari');
		$repofmpa = $this->input->post('repofmpa');
		$officerlivestock = $this->input->post('officerlivestock');
		$headmaster = $this->input->post('headmaster');
		$imam = $this->input->post('imam');
		$ct_id = $this->input->post('ct_id'); 
		$user_id = $this->session->userdata('user_id');

		$form_data = array(	'name' => $name,
							'father_name' => $fathername,
							'date_of_incident' => $incidentdate,
							'address' => $cnicnumber,
							'district' => $district,
							'address' => $address,
							'reason' => $reason,
							'b_id' => $budget,
							'cattle_type' => $cattletype,
							'patwari' => $halqapatwari,
							'rep_mpa' => $repofmpa,
							'officer_livestock' => $officerlivestock,
							'headmaster' => $headmaster,
							'imam' => $imam,
							'u_id'	=> $user_id );

		$this->db->where('ct_id', $ct_id);
		$this->db->update('cattle', $form_data);
	}
	public function add($formdata){
		$name = $formdata->name;
		$fathername = $formdata->fathername;
		$dateofincident = $formdata->incidentdate;
		$cnicnumber = $formdata->cnicnumber;
		$address = $formdata->address;
		$reason = $formdata->reason;
		$district = $formdata->district;
		$budget = $formdata->budget;
		$cattletype = $formdata->cattletype;
		$halqapatwari = $formdata->halqapatwari;
		$repofmpa = $formdata->repofmpa;
		$districtofficerlivestock = $formdata->districtofficerlivestock;
		$headmaster = $formdata->headmaster;
		$imam = $formdata->imam;
		$user_id = $this->session->userdata('user_id');


		$data = array(	'name' => $name,
						'cnic'	=> $cnicnumber,
		 				'father_name' => $fathername,
		 				'date_of_incident' => $dateofincident,
		 				'address'	=> $address,
		 				'cattle_type' => $cattletype,
		 				'reason'	=> $reason,
		 				'district' => $district,
		 				'patwari'	=> $halqapatwari,
		 				'headmaster'	=> $headmaster,
		 				'imam'	=> $imam,
		 				'officer_livestock' => $districtofficerlivestock,
		 				'rep_mpa'	=> $repofmpa,
		 				'b_id'	=> $budget,
		 				'u_id'	=> $user_id);
		$response = [];
		if($this->db->insert('cattle', $data)){
			$response['done'] = true;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}
	}
}