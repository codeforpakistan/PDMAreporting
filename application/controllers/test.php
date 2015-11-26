<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	
	public function multi_table()
	{
		$this->db->select('*');
		$this->db->from('cattle');
		$this->db->from('house_damage');
		$result = $this->db->get()->result();
		//$result = $this->db->from('cattle, dead_injured')->get()->result();
		print_r($result);
	}
}