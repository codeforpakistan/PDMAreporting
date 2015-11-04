<?php
class Cattle_model extends CI_Model{
	
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
		 				'ct_date_created' => date('Y-m-d'),
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