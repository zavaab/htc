<?php
class Elalg_session extends CI_Model {


    // new_elalg_session
	public function new_elalg_session($data){
 
		$this->db->select_max('id', 'max_id');
        $query = $this->db->get('elalg_session');
        $row=$query->row();
        
        if($query->num_rows()==1){
            $max_id=$row->max_id;
        }else{
            $max_id=1;
        }
        $max_id=(int)$max_id;
        $max_id++;
        $session_c="session_c".$max_id;
		$data['session_code']=$session_c;
		// print_r($data);die;
		$this->db->insert('elalg_session', $data);
		
	}
	
	public function get_elalg_session($natioanl_id){

		$this->db->select('elalg_session.*,tbl_users.*');
		$this->db->from('elalg_session');
		$this->db->join('tbl_users', 'elalg_session.natioanl_numbr = tbl_users.natioanl_numbr');
		$this->db->where('elalg_session.natioanl_numbr' , $natioanl_id);
		$query = $this->db->get();
		return $query->result();

		
		$this->db->select('*');
		$this->db->from('elalg_session');
		$this->db->where('natioanl_numbr' , $natioanl_id);
		$query = $this->db->get();
		return $query->result();
	}


	  // new_elalg_session
	  public function addSession_details($data){
		$this->db->insert('elalg_session_details', $data);
		
		}
	  public function Session_getdetails($session_code){
		$this->db->select('*');
		$this->db->from('elalg_session_details');
		$this->db->where('session_code' , $session_code);
		$this->db->order_by('id' , "desc");
		$query = $this->db->get();
		return $query->result();
		
		}


		public function Session_user_info($session_code){
			$this->db->select('elalg_session.session_title,elalg_session.session_title, tbl_users.first_name , tbl_users.last_name ,tbl_users.natioanl_numbr, elalg_session.natioanl_numbr ');
			$this->db->from('elalg_session');
			$this->db->join('tbl_users', 'elalg_session.natioanl_numbr = tbl_users.natioanl_numbr');
			$this->db->where('elalg_session.session_code' , $session_code);
			$query = $this->db->get();
			return $query->result();
		}

		public function change_status($session_code){
			
			$data = array(
				'session_status' =>1
			);
			$this->db->where('session_code', $session_code);
			$this->db->update('elalg_session', $data);

		}

		public function  Session_info($session_code){
		$this->db->select('session_end_date_en , session_end_date_fa , session_status');
		$this->db->from('elalg_session');
		$this->db->where('session_code' , $session_code);
		$query = $this->db->get();
		return $query->result();
		} 
		

		

	

	
	
  


   

}