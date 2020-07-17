<?php
class ModelDownloads extends CI_Model {




	// *****get all GetDownloads****
	public function GetDownloads($category){
		$this->db->select('*');
		$this->db->from('tbl_downloads');
		$this->db->where('d_category',$category);
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all slider****
	// *****get all getDetailsDownload****
	public function getDetailsDownload($d_id){
		$this->db->select('d_details');
		$this->db->from('tbl_downloads');
		$this->db->where('d_id',$d_id);
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all slider****

	// *****get all Gallary****
	public function GetGallery($id){
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all Gallary****
	// *****get all Gallary****
	public function GetGalleryFolder(){
		$this->db->select('id,title');
		$this->db->from('tbl_gallery');
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all Gallary****


	public function file_dpwnload($d_id){
		$this->db->where('d_id', $d_id);
		$this->db->set('file_download', '`file_download`+ 1', FALSE);
		$this->db->update('tbl_downloads');


		$this->db->select('file_download');
		$this->db->from('tbl_downloads');
		$this->db->where('d_id',$d_id);
		$reault_array = $this->db->get()->result_array();
		return $reault_array[0]['file_download'];

	}





}
