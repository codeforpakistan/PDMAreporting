<?php
class House_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('hd_id',$id);
		$return = $this->db->get('house_damage')->result_array();
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
		$housedamage = $formdata->housedamage;
		$halqapatwari = $formdata->halqapatwari;
		$repofmpa = $formdata->repofmpa;
		$tehsildar = $formdata->tehsildar;
		$localschoolheadmaster = $formdata->localschoolheadmaster;
		$localimammasjid = $formdata->localimammasjid;


		$data = array(	'owner_name' => $name,
		 				'father_name' => $fathername,
		 				'date_of_incident' => $dateofincident,
		 				'cnic'	=> $cnicnumber,
		 				'address'	=> $address,
		 				'damage_type' => $housedamage,
		 				'reason'	=> $reason,
		 				'district' => $district,
		 				'patwari'	=> $halqapatwari,
		 				'headmaster'	=> $localschoolheadmaster,
		 				'himam'	=> $localimammasjid,
		 				'tehsildar' => $tehsildar,
		 				'rep_mpa'	=> $repofmpa,
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