<?php
class Report_dist_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('id',$id);
		$return = $this->db->get('report_dist')->result_array();
		return $return[0];
	}
	public function edit_category($formdata){
		$u_category = $formdata->u_category;
		$id = $formdata->u_id;

		$data = array('u_category' => $u_category);
		$this->db->where('u_id', $id);
		$response = [];
		if($this->db->update('user', $data)){
			$response['done'] = true;
			echo json_encode($response);
		}

	}

	public function edit($formdata){
		$hd_full = $formdata->i_hd_full;
		$hd_partial = $formdata->i_hd_partial;
		$c_big = $formdata->i_c_big;
		$c_small = $formdata->i_c_small;
		$dead = $formdata->i_dead;
		$injured = $formdata->i_injured;
		$district = $formdata->i_district;
		$date = $formdata->i_date;
		$id = $formdata->id;

		$data = array(	'i_hd_full' => $hd_full,
						'i_hd_partial'	=> $hd_partial,
						'i_c_big'	=> $c_big,
						'i_c_small'	=> $c_small,
						'i_dead'	=> $dead,
						'i_injured'	=> $injured,
		 				'i_district' => $district,
		 				'i_date' => $date);
		
		$this->db->where('id', $id);
		if($this->db->update('report_dist', $data)){
			return true;
		}
		else{
			return false;
		}

	}
	public function add($formdata){
		$hd_full = $formdata->i_hd_full;
		$hd_partial = $formdata->i_hd_partial;
		$c_big = $formdata->i_c_big;
		$c_small = $formdata->i_c_small;
		$dead = $formdata->i_dead;
		$injured = $formdata->i_injured;
		$district = $formdata->i_district;
		$date = $formdata->i_date;
		

		$data = array(	'i_hd_full' => $hd_full,
						'i_hd_partial'	=> $hd_partial,
						'i_c_big'	=> $c_big,
						'i_c_small'	=> $c_small,
						'i_dead'	=> $dead,
						'i_injured'	=> $injured,
		 				'i_district' => $district,
		 				'i_date' => $date);
		
		if($this->db->insert('report_dist', $data)){
			return true;
		}
		else{
			return false;
		}
	}
}