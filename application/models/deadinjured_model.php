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
						'date_of_report_rfs' => $dateofreport,
						'date_of_incident' => $dateofaccident,
						'name' => $name,
		 				'father_name' => $fathername,
		 				'address'	=> $address,
		 				'cnic'	=> $cnicnumber,
		 				'reason'	=> $reason,
		 				'district' => $district,
		 				'patwari'	=> $halqapatwari,
		 				'headmaster'	=> $localschoolheadmaster,
		 				'med_officer'	=> $medicalofficer,
		 				'tehsildar' => $tehsildar,
		 				'date_created' => date('Y-m-d'),
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