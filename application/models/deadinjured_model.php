<?php
class Deadinjured_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('di_id',$id);
		$return = $this->db->get('dead_injured')->result_array();
		return $return[0];
	}

	public function add($formdata){
		$dateofreport = $formdata->reportdate;
		$dateofaccident = $formdata->incidentdate;
		$name = $formdata->name;
		$fathername = $formdata->fathername;
		$cnicnumber = $formdata->cnicnumber;
		$address = $formdata->address;
		$reason = $formdata->reason;
		$district = $formdata->district;
		$budget = $formdata->budget;
		$halqapatwari = $formdata->halqapatwari;
		$medicalofficer = $formdata->medicalofficer;
		$tehsildar = $formdata->tehsildar;
		$localschoolheadmaster = $formdata->localschoolheadmaster;
	


		$data = array(	
						'di_date_of_report_rfs' => $dateofreport,
						'di_date_of_incident' => $dateofaccident,
						'di_name' => $name,
		 				'di_father_name' => $fathername,
		 				'di_address'	=> $address,
		 				'di_cnic'	=> $cnicnumber,
		 				'di_reason'	=> $reason,
		 				'di_district' => $district,
		 				'di_patwari'	=> $halqapatwari,
		 				'di_headmaster'	=> $localschoolheadmaster,
		 				'di_med_officer'	=> $medicalofficer,
		 				'di_tehsildar' => $tehsildar,
		 				'di_date_created' => date('Y-m-d'),
		 				'b_id'	=> $budget,
		 				'u_id'	=> 1);
		$response = [];
		if($this->db->insert('dead_injured', $data)){
			$response['done'] = $dateofreport;
			echo json_encode($response);
		}
		else{
			$response['done'] = false;
			echo json_encode($response);
		}
	}
}