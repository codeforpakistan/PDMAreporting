<?php
class Items_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('id',$id);
		$return = $this->db->get('items')->result_array();
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
		$fi = $formdata->i_fooditems;
		$nfi = $formdata->i_nfooditems;

		$district = $formdata->i_district;
		$date = $formdata->i_date;
		$id = $formdata->id;

		$data = array(	'i_fooditems' => $fi,
						'i_nfooditems'	=> $nfi,
		 				'i_district' => $district,
		 				'i_date' => $date);
		
		$this->db->where('id', $id);
		if($this->db->update('items', $data)){
			return true;
		}
		else{
			return false;
		}

	}
	public function add($formdata){
		$fi = $formdata->fi;
		$nfi = $formdata->nfi;

		$district = $formdata->district;
		$date = $formdata->date;

		$data = array(	'i_fooditems' => $fi,
						'i_nfooditems'	=> $nfi,
		 				'i_district' => $district,
		 				'i_date' => $date);
		
		if($this->db->insert('items', $data)){
			return true;
		}
		else{
			return false;
		}
	}
}