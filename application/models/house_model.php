<?php
class House_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('hd_id',$id);
		$return = $this->db->get('house_damage')->result_array();
		return $return;
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


		$data = array(	'hd_owner_name' => $name,
		 				'hd_father_name' => $fathername,
		 				'hd_date_of_incident' => $dateofincident,
		 				'hd_cnic'	=> $cnicnumber,
		 				'hd_address'	=> $address,
		 				'hd_damage_type' => $housedamage,
		 				'hd_reason'	=> $reason,
		 				'hd_district' => $district,
		 				'hd_patwari'	=> $halqapatwari,
		 				'hd_headmaster'	=> $localschoolheadmaster,
		 				'hd_imam'	=> $localimammasjid,
		 				'hd_tehsildar' => $tehsildar,
		 				'hd_rep_mpa'	=> $repofmpa,
		 				'b_id'	=> $budget,
		 				'u_id'	=> 1);
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