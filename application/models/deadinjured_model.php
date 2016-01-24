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
		$special_compensation = $this->input->post('special_compensation');
		$budget = $this->input->post('budget');
		$casetype = $this->input->post('casetype');
		$halqapatwari = $this->input->post('halqapatwari');
		$medicalofficer = $this->input->post('medicalofficer');
		$tehsildar = $this->input->post('tehsildar');
		$headmaster = $this->input->post('headmaster');
		$dc = $this->input->post('dc');
		$di_id = $this->input->post('di_id'); 
		$user_id = $this->session->userdata('user_id');

		$form_data = array(	'name' => $name,
							'father_name' => $fathername,
							'cnic'	=> $cnicnumber,
							'date_of_incident' => $incidentdate,
							'date_of_report_rfs' => $dateofreport,
							'district' => $district,
							'address' => $address,
							'reason' => $reason,
							'special_compensation' => $special_compensation,
							'b_id' => $budget,
							'patwari' => $halqapatwari,
							'med_officer' => $medicalofficer,
							'tehsildar' => $tehsildar,
							'headmaster' => $headmaster,
							'dc' => $dc,
							'u_id'	=> $user_id );

		$this->db->where('di_id', $di_id);
		$this->db->update('dead_injured', $form_data);
	}

public function add_from_sheet($data){
		$this->db->insert('dead_injured', $data);
	}

	public function add($formdata){
		$dateofreport = $formdata->reportdate;
		$dateofaccident = $formdata->incidentdate;
		$name = $formdata->name;
		$fathername = $formdata->fathername;
		$cnicnumber = $formdata->cnicnumber;
		$address = $formdata->address;
		$reason = $formdata->reason;
		$special_compensation = $formdata->special_compensation;
		$district = $formdata->district;
		$budget = $formdata->budget;
		$halqapatwari = $formdata->halqapatwari;
		$medicalofficer = $formdata->medicalofficer;
		$tehsildar = $formdata->tehsildar;
			$dc = $formdata->dc;
		$localschoolheadmaster = $formdata->localschoolheadmaster;
		$user_id = $this->session->userdata('user_id');
	


		$data = array(	
						'date_of_report_rfs' => $dateofreport,
						'date_of_incident' => $dateofaccident,
						'name' => $name,
		 				'father_name' => $fathername,
		 				'address'	=> $address,
		 				'cnic'	=> $cnicnumber,
		 				'reason'	=> $reason,
		 				'special_compensation'	=> $special_compensation,
		 				'district' => $district,
		 				'patwari'	=> $halqapatwari,
		 				'headmaster'	=> $localschoolheadmaster,
		 				'med_officer'	=> $medicalofficer,
		 				'tehsildar' => $tehsildar,
		 				'dc' => $dc,
		 				'date_created' => date('Y-m-d'),
		 				'b_id'	=> $budget,
		 				'u_id'	=> user_id);
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