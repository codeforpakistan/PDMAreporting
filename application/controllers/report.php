<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	public function index(){
		
	}
	public function general(){
		
		$datefrom = $this->input->post('datefrom');
		$dateto = $this->input->post('dateto');

		$district = $this->input->post('district');
		
		$small = $this->input->post('small');
		$big = $this->input->post('big');

		$dead = $this->input->post('dead');
		$injured = $this->input->post('injured');

		$partial = $this->input->post('partial');
		$full = $this->input->post('full');

		
		if($small == true || $big == true){
			$this->db->select('*');
			$this->db->from('cattle');
			
			if($small == true && $big == false)
				$this->db->where('cattle.cattle_type','small');
			if($big == true && $small == false)
				$this->db->where('cattle.cattle_type','big');
			if(!empty($district))
				$this->db->where('district', $district);
			if(!empty($datefrom))
				$this->db->where('date_of_incident >=', $datefrom);
			if(!empty($dateto))
				$this->db->where('date_of_incident <=', $dateto);

			$data['cattle'] = $this->db->get()->result();
		}

		if($partial == true || $full == true){
			$this->db->select('*');
			$this->db->from('house_damage');
			
			if($partial == true && $full == false)
				$this->db->where('house_damage.damage_type','partial');
			if($full == true && $partial == false)
				$this->db->where('house_damage.damage_type','full');
			if(!empty($district))
				$this->db->where('district', $district);
			if(!empty($datefrom))
				$this->db->where('date_of_incident >=', $datefrom);
			if(!empty($dateto))
				$this->db->where('date_of_incident <=', $dateto);

			$data['house_damage'] = $this->db->get()->result();
		}

		if($dead == true || $injured == true){
			$this->db->select('*');
			$this->db->from('dead_injured');

			if($dead == true && $injured == false)
				$this->db->where('dead_injured.case_type','dead');
			if($injured == true && $dead == false)
				$this->db->where('dead_injured.case_type','injured');
			if(!empty($district))
				$this->db->where('district', $district);
			if(!empty($datefrom))
				$this->db->where('date_of_incident >=', $datefrom);
			if(!empty($dateto))
				$this->db->where('date_of_incident <=', $dateto);

			$data['dead_injured'] = $this->db->get()->result();
		}
		$this->load->view('general_report', $data);


	}
}	