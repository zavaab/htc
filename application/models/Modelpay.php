<?php
class Modelpay extends CI_Model {


	function insertPay($data){

        $this->db->insert('tbl_pay',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
	}

	function updatePay($refid,$authority){
        $data_update=array(
            'refid'=>$refid
        );
        $this->db->where('authority',$authority);
        $this->db->update('tbl_pay',$data_update);
	}


	public function getCourseDetails($code){
		$this->db->select('*');
		$this->db->from('tbl_courses');
		$this->db->where('Code',$code);
		$query = $this->db->get();
		return $query->row_array();
	}


}







