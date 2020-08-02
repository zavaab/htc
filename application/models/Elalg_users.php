<?php
class elalg_users extends CI_Model {


    // list_user
	public function list_user(){
        $this->db->select('username,first_name , last_name , date_fa, status');
		$this->db->from('tbl_users');
		$query = $this->db->get();
		return $query->result();
    }
  
    //user_info
	public function user_info($national_id){
        $this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('natioanl_numbr' , $national_id);
		$query = $this->db->get();
		return $query->result();
    }
    
    public function user_approve($national_id){
       
        $data = array(
			'status' =>1
		);
		$this->db->where('natioanl_numbr', $national_id);
        $this->db->update('tbl_users', $data);
        
	}

	public function login($national_id, $password){
       
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('username' , $national_id);
		$this->db->where('password' , $password);
		$query = $this->db->get();
		return $query->result();
        
	}
	


   

}