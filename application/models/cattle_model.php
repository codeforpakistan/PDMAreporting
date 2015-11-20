<?php
class Cattle_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('ct_id',$id);
		$return = $this->db->get('cattle')->result_array();
		return $return[0];
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


		$data = array(	'owner_name' => $name,
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