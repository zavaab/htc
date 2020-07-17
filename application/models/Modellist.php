<?php
class Modellist extends CI_Model {




	// *****get all list****
	public function listcourse(){
		$this->db->select('*');
		$this->db->from('tbl_courses');
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all list****





}
