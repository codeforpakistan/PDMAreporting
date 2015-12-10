<?php
class House_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->select('*');
		$this->db->from('house_damage');
		$this->db->where('hd_id',$id);
		$this->db->join('budget', 'budget.b_id = house_damage.b_id');
		$return = $this->db->get()->result_array();
		return $return[0];
	}


	public function update(){

		$name = $this->input->post('name');
		$fathername = $this->input->post('fathername');
		$incidentdate = $this->input->post('incidentdate');
		$dateofreport = $this->input->post('dateofreport');
		$cnicnumber = $this->input->post('cnic');
		$district = $this->input->post('district');
		$address = $this->input->post('address');
		$reason = $this->input->post('reason');
		$budget = $this->input->post('budget');
		$housedamage = $this->input->post('housedamage');
		$halqapatwari = $this->input->post('patwari');
		$repofmpa = $this->input->post('repofmpa');
		$tehsildar = $this->input->post('tehsildar');
		$headmaster = $this->input->post('headmaster');
		$imam = $this->input->post('imam');
		$di_id = $this->input->post('hd_id'); 
		$user_id = $this->session->userdata('user_id');

		$form_data = array(	'name' => $name,
			 				'father_name' => $fathername,
			 				'date_of_incident' => $incidentdate,
			 				'cnic'	=> $cnicnumber,
			 				'address'	=> $address,
			 				'damage_type' => $housedamage,
			 				'reason'	=> $reason,
			 				'district' => $district,
			 				'patwari'	=> $halqapatwari,
			 				'headmaster'	=> $headmaster,
			 				'imam'	=> $imam,
			 				'tehsildar' => $tehsildar,
			 				'rep_mpa'	=> $repofmpa,
			 				'b_id'	=> $budget,
			 				'u_id'	=> $user_id);

		$this->db->where('hd_id', $di_id);
		$this->db->update('house_damage', $form_data);
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
		$housedamage = $formdata->housedamage;
		$halqapatwari = $formdata->halqapatwari;
		$repofmpa = $formdata->repofmpa;
		$tehsildar = $formdata->tehsildar;
		$localschoolheadmaster = $formdata->localschoolheadmaster;
		$localimammasjid = $formdata->localimammasjid;
		$user_id = $this->session->userdata('user_id');

		$data = array(	'name' => $name,
		 				'father_name' => $fathername,
		 				'date_of_incident' => $dateofincident,
		 				'cnic'	=> $cnicnumber,
		 				'address'	=> $address,
		 				'damage_type' => $housedamage,
		 				'reason'	=> $reason,
		 				'district' => $district,
		 				'patwari'	=> $halqapatwari,
		 				'headmaster'	=> $localschoolheadmaster,
		 				'imam'	=> $localimammasjid,
		 				'tehsildar' => $tehsildar,
		 				'rep_mpa'	=> $repofmpa,
		 				'b_id'	=> $budget,
		 				'u_id'	=> $user_id);
		$response = [];
		if($this->db->insert('house_damage', $data)){
			$response['done'] = true;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}
	}
}