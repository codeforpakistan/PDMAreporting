<?php
class Budget_model extends CI_Model{
	
	public function get_by_id($id){
		$this->db->where('b_id',$id);
		$return = $this->db->get('budget')->result_array();
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
		$id = $formdata->b_id;
		$year = $formdata->b_year;
		$amount = $formdata->b_amount;
		$category = $formdata->b_category;

		$data = array(	'b_amount' => $amount,
						'b_year'	=> $year,
		 				'b_category' => $category);
		
		$this->db->where('b_id', $id);
		if($this->db->update('budget', $data)){
			return true;
		}
		else{
			return false;
		}

	}
	public function add($formdata){
		$year = $formdata->year;
		$amount = $formdata->amount;
		$category = $formdata->category;

		$data = array(	'b_amount' => $amount,
						'b_year'	=> $year,
		 				'b_category' => $category);
		
		if($this->db->insert('budget', $data)){
			return true;
		}
		else{
			return false;
		}
	}
}