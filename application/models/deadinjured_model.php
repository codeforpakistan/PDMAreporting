<?php
class Deadinjured_model extends CI_Model{
	
	public function get_by_id($id){

		$this->db->select('*');
		$this->db->from('dead_injured');
		$this->db->where('di_id',$id);
		$this->db->join('budget', 'budget.b_id = dead_injured.b_id');
		$return = $this->db->get()->result_array();

		return $return[0];
	}
	public function update(){

		$name = $this->input->post('name');
		$fathername = $this->input->post('fathername');
		$incidentdate = $this->input->post('incidentdate');
		$dateofreport = $this->input->post('dateofreport');
		$cnicnumber = $this->input->post('cnicnumber');
		$district = $this->input->post('district');
		$address = $this->input->post('address');
		$reason = $this->input->post('reason');
		$budget = $this->input->post('budget');
		$cattletype = $this->input->post('cattletype');
		$halqapatwari = $this->input->post('halqapatwari');
		$medicalofficer = $this->input->post('medicalofficer');
		$tehsildar = $this->input->post('tehsildar');
		$headmaster = $this->input->post('headmaster');
		$di_id = $this->input->post('di_id'); 

		$form_data = array(	'name' => $name,
							'father_name' => $fathername,
							'cnic'	=> $cnicnumber,
							'date_of_incident' => $incidentdate,
							'date_of_report_rfs' => $dateofreport,
							'district' => $district,
							'address' => $address,
							'reason' => $reason,
							'b_id' => $budget,
							'patwari' => $halqapatwari,
							'med_officer' => $medicalofficer,
							'tehsildar' => $tehsildar,
							'headmaster' => $headmaster,
							'u_id'	=> 1 );

		$this->db->where('di_id', $di_id);
		$this->db->update('dead_injured', $form_data);
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