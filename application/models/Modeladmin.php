<?php
class Modeladmin extends CI_Model {


// login form
	public function login($username,$password){
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get();
		$exsist= $query->num_rows();
		if ($exsist==1) {
			return 1;
		}else{
			return 0;
		}
	}


	// *****get all slider****
	public function getsliderv(){
		$this->db->select('*');
		$this->db->from('tbl_slider');
		$this->db->where('s_visible',1);
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all slider****
	// *****get all slider bottom****
	public function getslider_bottom(){
		$this->db->select('*');
		$this->db->from('tbl_slider_bottom');
		$this->db->where('s_visible',1);
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all bottom****

	// *****get all studnets****
	public function register($data,$email){
		$this->db->select('*');
		$this->db->from('tbl_moshavereh');
		$this->db->where('s_email',$email);
		$query = $this->db->get();
		$exsist= $query->num_rows();
		if($exsist>=1){
			return "duplicate";
		}else{
			$this->db->insert('tbl_moshavereh', $data);
			return "success";
		}
	}
	// *****get all slider****

	// *****get all slider****
	public function getslider(){
		$this->db->select('*');
		$this->db->from('tbl_slider');
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all slider****


	// *****get all getstudents****
	public function getstudents(){
		$this->db->select('*');
		$this->db->from('tbl_moshavereh');
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all getstudents****

	// *****get all getmasters****
	public function getmasters(){
		$this->db->select('*');
		$this->db->from('tbl_masters');
		$this->db->order_by('tbl_masters.m_id');

		$query = $this->db->get();
		return $query->result();
	}
	// *****get all getmasters****
	// *****get all students_comment for Home****
	public function students_comment(){
		$this->db->select('tbl_studentcomment.*,
		tbl_students.s_id,tbl_students.s_firstname_en,tbl_students.s_lastname_en,tbl_students.s_firstname_fa,tbl_students.s_lastname_fa,tbl_students.s_image');
		$this->db->from('tbl_studentcomment');
		$this->db->join('tbl_students', 'tbl_studentcomment.sc_id = tbl_students.s_id');
		$this->db->order_by('tbl_studentcomment.sc_id', 'DESC');
		$this->db->where('tbl_studentcomment.sc_show', 1);
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all getmasters****

	// *****get all students_comment for Admin****
	public function students_commentAdmin(){
		$this->db->select('tbl_studentcomment.*,
		tbl_moshavereh.s_id,tbl_moshavereh.s_firstname,tbl_moshavereh.s_lastname,tbl_moshavereh.s_image');
		$this->db->from('tbl_studentcomment');
		$this->db->join('tbl_students', 'tbl_studentcomment.sc_id = tbl_students.s_id');
		$this->db->order_by('tbl_studentcomment.sc_id', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all masters for Home****
	public function masters(){
		$this->db->select('*');
		$this->db->from('tbl_masters');
		$this->db->where('m_show', 1);
		$this->db->where('m_deleted', 0);
		$this->db->order_by('m_id', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// *****Add Slider****
	public function AddSlider($data){
		$this->db->insert('tbl_slider', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "uploaded";
		else
		return "error_uploaded";
	}
	// *****Add Slider****
	// *****Add Slider****
	public function AddGallery($data){
		$this->db->insert('tbl_gallery', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "uploaded";
		else
		return "error_uploaded";
	}
	public function removeGa($d_id){
		$this->db->where("id",$d_id);
		$this->db->delete("tbl_gallery");
		return;//onsuccess
	}

	// *****Add Slider****

	// *****Add Slider****
	public function AddDownload($data){
		$this->db->insert('tbl_downloads', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "uploaded";
		else
		return "error_uploaded";
	}
	// *****Add Slider****

	// *****get all getDownloads****
	public function getDownloads(){
		$this->db->select('*');
		$this->db->from('tbl_downloads');
		$query = $this->db->get();
		return $query->result();
	}
	// *****get all getDownloads****
	public function removeD($d_id){
		$this->db->where("d_id",$d_id);
		$this->db->delete("tbl_downloads");
		return;//onsuccess
	}
	// *****downloads notshow****
	public function notshow($d_id){
		$data = array(
			'd_visible' =>0
		);
		$this->db->where('d_id', $d_id);
		$this->db->update('tbl_downloads', $data);
	}
	// *****get all getDownloads****

	public function updateDownload($data,$d_id){
		$this->db->where('d_id',$d_id);
		$this->db->update('tbl_downloads', $data);
	}

	// *****downloads show****
	public function show($d_id){
		$data = array(
			'd_visible' => 1
		);
		$this->db->where('d_id', $d_id);
		$this->db->update('tbl_downloads', $data);
	}
	// *****get all getDownloads****

	// *****Slider notshow****
	public function notshowS($s_id){
		$data = array(
			's_visible' =>0
		);
		$this->db->where('s_id', $s_id);
		$this->db->update('tbl_slider', $data);
	}
	// *****get all getDownloads****

	// *****Slider show****
	public function showS($s_id){
		$data = array(
			's_visible' => 1
		);
		$this->db->where('s_id', $s_id);
		$this->db->update('tbl_slider', $data);
	}
	// *****get all getDownloads****




	// *****get all welcome****
	public function addwelcome($data){
		$this->db->where('id',1);
		$this->db->update('tbl_welcome', $data);
	}


	public function getwelcome(){
		$this->db->select('*');
		$this->db->from('tbl_welcome');
		$query = $this->db->get();
		return $query->result();
	}


	// *****get all welcome****


	// get all staff

	public function getstaff(){
		$this->db->select('*');
		$this->db->from('tbl_masters');
		$query = $this->db->get();
		return $query->result();
	}


	public function notshowM($m_id){
		$data = array(
			'm_show' =>0
		);
		$this->db->where('m_id', $m_id);
		$this->db->update('tbl_masters', $data);
	}
	// *****get all getDownloads****

	// *****Slider show****
	public function showM($m_id){
		$data = array(
			'm_show' => 1
		);
		$this->db->where('m_id', $m_id);
		$this->db->update('tbl_masters', $data);
	}
	// *****Slider show****
	public function deleteM($m_id){
		$this->db->where('m_id', $m_id);
		$this->db->delete('tbl_masters');
	}
	// *****get all getDownloads****

	public function addMaster($data){
		$this->db->insert('tbl_masters', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "uploaded";
		else
		return "error_uploaded";
	}


	// slider bottom

	public function getsliderbt(){
		$this->db->select('*');
		$this->db->from('tbl_slider_bottom');
		$query = $this->db->get();
		return $query->result();
	}



// *****Add Slider****
public function AddSliderbt($data){
	$this->db->insert('tbl_slider_bottom', $data);
	$num_inserts = $this->db->affected_rows();
	if($num_inserts)
	return "uploaded";
	else
	return "error_uploaded";
}
// *****Add Slider bottom****


public function notshowSbt($s_id){
	$data = array(
		's_visible' =>0
	);
	$this->db->where('s_id', $s_id);
	$this->db->update('tbl_slider_bottom', $data);
}
// *****get all getDownloads****

// *****Slider show****
public function showSbt($s_id){
	$data = array(
		's_visible' => 1
	);
	$this->db->where('s_id', $s_id);
	$this->db->update('tbl_slider_bottom', $data);
}
// *****get all getDownloads****


// *****Set Timer****
public function SetTimer($date,$clock,$text_en,$text_fa){
	$data = array(
		'date' => $date,
		'clock'=>$clock,
		'text_en'=>$text_en,
		'text_fa'=>$text_fa,
	);
	$this->db->insert('tbl_timer', $data);
	$num_inserts = $this->db->affected_rows();
}
// *****Set Timer****

// *****getTimerAdmin****
public function getTimerAdmin(){
	$this->db->select('*');
		$this->db->from('tbl_timer');
		$query = $this->db->get();
		return $query->result();
}
// ***** getTimerAdmin****

// *****getTimer****
public function getTimer(){
		$this->db->select('*');
		$this->db->from('tbl_timer');
		$this->db->where('state',1);
		$query = $this->db->get();
		return $query->result();
}
// ***** getTimer****

public function notshowT($m_id){
		$data = array(
			'state' =>0
		);
		$this->db->where('id', $m_id);
		$this->db->update('tbl_timer', $data);
	}
	// *****get getTimer****

	// *****Slider show****
	public function showT($m_id){
		$data = array(
			'state' => 1
		);
		$this->db->where('id', $m_id);
		$this->db->update('tbl_timer', $data);
	}
	// *****getTimer show****
// *****getTimer delete****
public function deleteT($m_id){
		$this->db->where('id', $m_id);
		$this->db->delete('tbl_timer');
	}
	// *****getTimer delete****



// New Course  GetAllCourse
	public function GetAllCourse(){
		$this->db->select('*');
		$this->db->from('tbl_courses');
		$query = $this->db->get();
		return $query->result();
	}
	// *****course delete****
public function deleteC($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_courses');
	}
	// *****getTimer delete****
public function addCourse($data){
		$this->db->insert('tbl_courses', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "uploaded";
		else
		return "error_uploaded";
	}



// resume
	public function resume($data){
		$this->db->insert('tbl_resume', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "uploaded";
		else
		return "error_uploaded";
	}

	public function getresume(){
		$this->db->select('*');
		$this->db->from('tbl_resume');
		$query = $this->db->get();
		return $query->result();
	}
	public function getcontactus(){
		$this->db->select('*');
		$this->db->from('tbl_contactus');
		$query = $this->db->get();
		return $query->result();
	}



	// contact us

	public function contactus($data){
		$this->db->insert('tbl_contactus', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "insert";
		else
		return "error";
	}

	// getgallery
	public function getgallery(){
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$query = $this->db->get();
		return $query->result();
	}

	public function notshowG($s_id){
		$data = array(
			'g_visible' =>0
		);
		$this->db->where('s_id', $s_id);
		$this->db->update('tbl_gallery', $data);
	}
	// *****get all getDownloads****

	// *****Slider show****
	public function showG($s_id){
		$data = array(
			'g_visible' => 1
		);
		$this->db->where('id', $s_id);
		$this->db->update('tbl_gallery', $data);
	}

	public function getnews(){
		$this->db->select('*');
		$this->db->from('tbl_news');
		$query = $this->db->get();
		return $query->result();
	}
	public function addNews($data){
		$this->db->insert('tbl_news', $data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts)
		return "insert";
		else
		return "error";

	}
	public function removeNews($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_news');
	}

	public function notshowNews($id){
		$data = array(
			'news_show' =>0
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_news', $data);
	}
	public function showNews($id){
		$data = array(
			'news_show' =>1
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_news', $data);
	}


	


}







