<?php
class Report_model extends CI_Model{
	
	public function general_report(){
		
		$datefrom = $this->input->post('datefrom');
		$dateto = $this->input->post('dateto');

		$district = $this->input->post('district');
		
		$small = $this->input->post('small');
		$big = $this->input->post('big');

		$dead = $this->input->post('dead');
		$injured = $this->input->post('injured');

		$partial = $this->input->post('partial');
		$full = $this->input->post('full');

		$compensated = $this->input->post('only_special_compensated');

		
		if($small == true || $big == true){
			$this->db->select('*');
			$this->db->from('cattle');
			$this->db->join('budget','budget.b_id = cattle.b_id');
			
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
			if(!empty($compensated))
				$this->db->where('special_compensation !=','');

			$data['cattle'] = $this->db->get()->result();
		}


		if($partial == true || $full == true){
			$this->db->select('*');
			$this->db->from('house_damage');
			$this->db->join('budget','budget.b_id = house_damage.b_id');
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
			if(!empty($compensated))
				$this->db->where('special_compensation !=','');

			$data['house_damage'] = $this->db->get()->result();
		}

		if($dead == true || $injured == true){
			$this->db->select('*');
			$this->db->from('dead_injured');
			$this->db->join('budget','budget.b_id = dead_injured.b_id');

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
			if(!empty($compensated))
				$this->db->where('special_compensation !=','');

			$data['dead_injured'] = $this->db->get()->result();
		}
		
		return $data;


	}
}