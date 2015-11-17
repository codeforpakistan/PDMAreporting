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


		$data = array(	'ct_owner_name' => $name,
						'ct_cnic'	=> $cnicnumber,
		 				'ct_father_name' => $fathername,
		 				'ct_date_of_incident' => $dateofincident,
		 				'ct_address'	=> $address,
		 				'ct_cattle_type' => $cattletype,
		 				'ct_reason'	=> $reason,
		 				'ct_district' => $district,
		 				'ct_patwari'	=> $halqapatwari,
		 				'ct_headmaster'	=> $headmaster,
		 				'ct_imam'	=> $imam,
		 				'ct_officer_livestock' => $districtofficerlivestock,
		 				'ct_rep_mpa'	=> $repofmpa,
		 				'b_id'	=> $budget,
		 				'u_id'	=> 1);
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