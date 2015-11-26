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
			
			if($small == true)
				$this->db->or_where('cattle.cattle_type','small');
			if($big == true)
				$this->db->or_where('cattle.cattle_type','big');

			$data['cattle'] = $this->db->get()->result();
		}

		if($partial == true || $full == true){
			$this->db->select('*');
			$this->db->from('house_damage');
			
			if($partial == true)
				$this->db->or_where('house_damage.damage_type','partial');
			if($full == true)
				$this->db->or_where('house_damage.damage_type','full');

			$data['house_damage'] = $this->db->get()->result();
		}

		if($dead == true || $injured == true){
			$this->db->select('*');
			$this->db->from('dead_injured');

			if($dead == true)
				$this->db->or_where('dead_injured.case_type','dead');
			if($injured == true)
				$this->db->or_where('dead_injured.case_type','injured');

			$data['dead_injured'] = $this->db->get()->result();
		}
		$this->load->view('general_report', $data);


	}
}	