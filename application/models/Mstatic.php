<?php
class Mstatic extends CI_Model {




	// *****get all list****
	public function getdata($id){
		$this->db->select('*');
        $this->db->from('pages');
        $this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result_array()[0];
	}
    // *****get all list****
    
    public function getAllPages(){
        $this->db->select('*');
        $this->db->from('pages');
		$query = $this->db->get();
		return $query->result_array();
    }
    public function addpage($data){
        $this->db->insert('pages', $data);
    }
    public function Updatepage($data,$id){
        $this->db->where('id', $id);
		$this->db->update('pages', $data);
    }

    public function mnu(){
        $this->db->select('id,page_title');
        $this->db->from('pages');
        $this->db->where('show',1);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function delpage($id){
		$this->db->where('id', $id);
		$this->db->delete('pages');
    }
    
    public function notshowMenu($id){
		$data = array(
			'show' =>0
		);
		$this->db->where('id', $id);
		$this->db->update('pages', $data);
	}
	// *****get all getDownloads****

	// *****Slider show****
	public function showMenu($id){
		$data = array(
			'show' => 1
		);
		$this->db->where('id', $id);
		$this->db->update('pages', $data);
	}





}
