<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->model('Modeladmin');
		$this->load->model('Modellist');
		$this->load->model('Mstatic');
		$this->load->model('ModelDownloads');

		// include APPPATH . 'third_party/PersianCalendar.php';
	}

	public function index()
	{
			if(isset($this->session->userdata['logged_in'])){
			$this->load->view('admin/admin');
			}else{
			$this->load->view('admin/login_form');
			}
		}

		public function login(){

			if(isset($this->session->userdata['logged_in'])){
			$this->load->view('admin/admin');
			}else{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$user=$this->Modeladmin->login($username, $password);
				// echo $username;
			if ($user==1) {
				$session_data = array(
				'username' => "admin"
				);
				// Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				// $this->load->view('admin/admin');
				$this->load->view('admin/admin');
			}else{
				$this->session->set_flashdata('error_userpass', 'UserName/Password Error');
				$this->load->view('admin/login_form');

			}
			}
		}

		// Logout from admin page
		public function logout() {

		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$this->load->view('admin/login_form');
		}



	public function sliders()
	{
		if(isset($this->session->userdata['logged_in'])){
		$sliders=$this->Modeladmin->getslider();
		$data=array(
			"sliders"=>$sliders
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/slider_new',$data);
		}else{
		$this->load->view('admin/login_form');
		}

	}
	public function students()
	{
		if(isset($this->session->userdata['logged_in'])){
			$students=$this->Modeladmin->getstudents();
		$data=array(
			"students"=>$students
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/students',$data);
	}else{
		$this->load->view('admin/login_form');
	}

	}
	public function masters()
	{
		if(isset($this->session->userdata['logged_in'])){
		$masters=$this->Modeladmin->getmasters();
		$data=array(
			"masters"=>$masters
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/masters',$data);
		}else{
		$this->load->view('admin/login_form');
		}

	}
	public function comments()
	{
		if(isset($this->session->userdata['logged_in'])){
			$comments=$this->Modeladmin->students_commentAdmin();
		$data=array(
			"comments"=>$comments
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/comments',$data);
		}else{
			$this->load->view('admin/login_form');
		}

	}



	// add slider
	public function addSldier(){
		if(isset($this->session->userdata['logged_in'])){
			$config['upload_path'] = 'assets/img/intro-carousel';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);

		$title_slider_en=$this->input->post('title_slider_en');
		$text_slider_en=$this->input->post('text_slider_en');
		$title_slider_fa=$this->input->post('title_slider_fa');
		$text_slider_fa=$this->input->post('text_slider_fa');
		$s_visible=$this->input->post('s_visible');

		// $uplaod=$this->upload->do_upload("slider_image");
		if(isset($_FILES['slider_image'])){
		if($this->upload->do_upload("slider_image")){
			$data = array('upload_data' => $this->upload->data());
			$filename= $data['upload_data']['file_name'];
			// echo $title_slider."<br/>";
			// echo $text_slider."<br/>";
			if(isset($s_visible)){
				$s_visible=1;
			}else{
					$s_visible=0;
			}
			$data=array(
				"s_title_en"=>$title_slider_en,
				"s_body_en"=>$text_slider_en,
				"s_title_fa"=>$title_slider_fa,
				"s_body_fa"=>$text_slider_fa,
				"s_visible"=>$s_visible,
				"s_img"=>$filename
			);
		$result=$this->Modeladmin->AddSlider($data);
		}
		else{
			$result="error_uploaded";
			// echo $this->upload->display_errors();
		}
		}else{
			$result="";
			// echo $this->upload->display_errors();
		}

		$sliders=$this->Modeladmin->getslider();
		$data=array(
			"sliders"=>$sliders,
			"result_upload"=>$result
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/slider_new',$data);
		}else{
			$this->load->view('admin/login_form');
		}



	}
	// add slider
	public function addGallery(){
		if(isset($this->session->userdata['logged_in'])){
			$config['upload_path'] = 'assets/img/images_gallary';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);

		$title=$this->input->post('title');

		$g_visible=$this->input->post('g_visible');
		$file_name='';
		// ***************
		// If file upload form submitted
        if(!empty($_FILES['gallery_image']['name'])){
            $filesCount = count($_FILES['gallery_image']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['gallery_image']['name'][$i];
                $_FILES['file']['type']     = $_FILES['gallery_image']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['gallery_image']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['gallery_image']['error'][$i];
                $_FILES['file']['size']     = $_FILES['gallery_image']['size'][$i];
                $this->upload->initialize($config);

                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
					$file_name =$file_name."".$fileData['file_name']."_||_";

                }
			}
			$file_name = rtrim($file_name, '_||_');
			$data=array(
				"title"=>$title,
				"img"=>$file_name
			);

		$result=$this->Modeladmin->AddGallery($data);
		$gallery=$this->Modeladmin->getgallery();
		$data=array(
			"gallery"=>$gallery,
			"result_upload"=>$result
		);
			$this->load->view('admin/gallery',$data);
        }


		// ***************
		}else{
			$this->load->view('admin/login_form');
		}
	}

	// downloads
	public function downloads()
	{
		if(isset($this->session->userdata['logged_in'])){
			$downloads=$this->Modeladmin->getDownloads();
			$data=array(
				"downloads"=>$downloads,
			);
		$this->load->view('admin/downloads',$data);
		}else{
			$this->load->view('admin/login_form');
		}

	}
	// Add downloads
	public function addDownload()
	{
		$filenamepdf=null;
		$filename=null;
		if(isset($this->session->userdata['logged_in'])){
		$config['upload_path'] = 'assets/img/downloads';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '2048000'; //5 MB 5120
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		$title_download_fa=$this->input->post('title_download_fa');
		$title_download_en=$this->input->post('title_download_en');
		$text_download_fa=$this->input->post('text_download_fa');
		$text_download_en=$this->input->post('text_download_en');
		$s_visible=$this->input->post('s_visible');
		$d_category=$this->input->post('d_category');
		$d_link_file=$this->input->post('d_link_file');
		

		


		// if($this->upload->do_upload("pdffile1"))
		// {
		// $data = array('upload_data' => $this->upload->data());
		// print_r($data);
		// }
		// else
		// {
		// $error = array('error' => $this->upload->display_errors());
		// print_r($error);
		// }
	

		if($this->upload->do_upload("download_image")){
			$data2 = array('upload_data' => $this->upload->data());
			$filename= $data2['upload_data']['file_name'];
			// echo $this->upload->display_errors();
		}
		
			if($this->upload->do_upload("pdffile1")){
				$data1 = array('upload_data1' => $this->upload->data());
				$filenamepdf= $data1['upload_data1']['file_name'];
				// echo $this->upload->display_errors();
			}

				// echo $title_slider."<br/>";
				// echo $text_slider."<br/>";
				if(isset($s_visible)){
					$s_visible=1;
				}else{
						$s_visible=0;
				}
				$data=array(
					"d_title_fa"=>$title_download_fa,
					"d_title_en"=>$title_download_en,
					"d_text_fa"=>$text_download_fa,
					"d_text_en"=>$text_download_en,
					"d_visible"=>$s_visible,
					"d_img"=>$filename,
					"d_category"=>$d_category,
					"d_file_name"=>$filenamepdf
				);

			$result=$this->Modeladmin->AddDownload($data);
			
	
		
			$downloads=$this->Modeladmin->getDownloads();
			$data=array(
				"downloads"=>$downloads,
				"result_upload"=>$result
			);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/downloads',$data);
		}else{
			$this->load->view('admin/login_form');
		}

	}

	public function removeD(){
		if(isset($this->session->userdata['logged_in'])){
		$d_id=$this->input->post("d_id");
		$this->Modeladmin->removeD($d_id);
		echo "success";
		}else{
		$this->load->view('admin/login_form');
		}

	}

	public function details(){
		if(isset($this->session->userdata['logged_in'])){
		$d_id=$this->input->post("d_id");
		$details=$this->input->post("details");
		$data=array(
			"d_details"=>$details
		);
		$this->Modeladmin->updateDownload($data,$d_id);
		$this->downloads();
		}else{
			$this->load->view('admin/login_form');
		}

	}



	// Downloads Show/DownShow
	public function show(){
		if(isset($this->session->userdata['logged_in'])){
			$d_id=$this->input->post('d_id');
		$result=$this->Modeladmin->show($d_id);
		echo "success";
		}else{
				$this->load->view('admin/login_form');
		}

	}

	public function notshow(){
		if(isset($this->session->userdata['logged_in'])){
			$d_id=$this->input->post('d_id');
		$result=$this->Modeladmin->notshow($d_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}


	// Slider Show/NotShow
	public function showS(){
		if(isset($this->session->userdata['logged_in'])){
			$s_id=$this->input->post('s_id');
		$result=$this->Modeladmin->showS($s_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}

	public function notshowS(){
		if(isset($this->session->userdata['logged_in'])){
			$s_id=$this->input->post('s_id');
		$result=$this->Modeladmin->notshowS($s_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}

	// welcome
	public function addwelcome(){
		if((isset($this->session->userdata['logged_in'])) && $this->input->post("title1_en")!=NULL ){
			$config['upload_path'] = 'assets/img/welcome';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);
		$filename=null;
		if(isset($_FILES['welcome_image'])){
			if($this->upload->do_upload("welcome_image")){
				$data = array('upload_data' => $this->upload->data());
				$filename= $data['upload_data']['file_name'];
			}
		}
		$title1_en=$this->input->post("title1_en");
		$title2_en=$this->input->post("title2_en");
		$text_en=$this->input->post('text_en');
		
		$title1_fa=$this->input->post("title1_fa");
		$title2_fa=$this->input->post("title2_fa");
		$text_fa=$this->input->post('text_fa');

		if(empty($filename)){
			$data=array(
				"title1_en"=>$title1_en,
				"title2_en"=>$title2_en,
				"text_en"=>$text_en,
				"title1_fa"=>$title1_fa,
				"title2_fa"=>$title2_fa,
				"text_fa"=>$text_fa,
				
			);
		}else{
			$data=array(
				"title1_en"=>$title1_en,
				"title2_en"=>$title2_en,
				"text_en"=>$text_en,
				"title1_fa"=>$title1_fa,
				"title2_fa"=>$title2_fa,
				"text_fa"=>$text_fa,
				"image"=>$filename
			);
		}
		




		$this->Modeladmin->addwelcome($data);
		$this->welcome();
		}else{
			$this->load->view('admin/login_form');
		}

	}
	public function welcome(){
		if(isset($this->session->userdata['logged_in'])){
		$result=$this->Modeladmin->getwelcome();
		$data=array(
			"welcome"=>$result
		);
		$this->load->view('admin/welcome',$data);
		}else{
			$this->load->view('admin/login_form');
		}

	}


	// staff
	public function staff(){
		if(isset($this->session->userdata['logged_in'])){
			$result=$this->Modeladmin->getstaff();
		$data=array(
			"staff"=>$result
		);
		$this->load->view('admin/staff',$data);
		}else{
				$this->load->view('admin/login_form');
		}

	}

	public function showM(){
		if(isset($this->session->userdata['logged_in'])){
$m_id=$this->input->post('m_id');
		$result=$this->Modeladmin->showM($m_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}

	public function notshowM(){
		if(isset($this->session->userdata['logged_in'])){
			$m_id=$this->input->post('m_id');
		$result=$this->Modeladmin->notshowM($m_id);
		echo "success";
		}else{
		$this->load->view('admin/login_form');
		}

	}

	// welcome
	public function addMaster(){
		if(isset($this->session->userdata['logged_in'])){
			$config['upload_path'] = 'assets/img/masters';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);
		$filename=null;
		if(isset($_FILES['master_image'])){
			if($this->upload->do_upload("master_image")){
				$data = array('upload_data' => $this->upload->data());
				$filename= $data['upload_data']['file_name'];
			}
		}
		$FirstName_en=$this->input->post("FirstName_en");
		$LastName_en=$this->input->post("LastName_en");
		$FirstName_en=$this->input->post("FirstName_fa");
		$LastName_en=$this->input->post("LastName_fa");
		$Mobile=$this->input->post('Mobile');
		$Email=$this->input->post('Email');
		$Affiliation_en=$this->input->post('Affiliation_en');
		$Affiliation_fa=$this->input->post('Affiliation_fa');
		$instagram=$this->input->post('instagram');
		$facebook=$this->input->post('facebook');
		$twitter=$this->input->post('twitter');
		$linkedin=$this->input->post('linkedin');
		$m_show=$this->input->post('m_show');

		if(isset($m_show)){
			$m_show=1;
		}else{
				$m_show=0;
		}
		if(empty($filename)){
			$data=array(
				"m_firstname_en"=>$FirstName_en,
				"m_lastname_en"=>$LastName_en,
				"m_firstname_fa"=>$FirstName_fa,
				"m_lastname_fa"=>$LastName_fa,
				"m_mobile"=>$Mobile,
				"m_email"=>$Email,
				"m_affiliation_en"=>$Affiliation_en,
				"m_affiliation_fa"=>$Affiliation_fa,
				"m_show"=>$m_show,
				"instagram"=>$instagram,
				"facebook"=>$facebook,
				"twitter"=>$twitter,
				"linkedin"=>$linkedin

			);
		}else{
			$data=array(
				"m_firstname_en"=>$FirstName_en,
				"m_lastname_en"=>$LastName_en,
				"m_firstname_fa"=>$FirstName_fa,
				"m_lastname_fa"=>$LastName_fa,
				"m_mobile"=>$Mobile,
				"m_email"=>$Email,
				"m_image"=>$filename,
				"m_affiliation_en"=>$Affiliation_en,
				"m_affiliation_fa"=>$Affiliation_fa,
				"m_show"=>$m_show,
				"instagram"=>$instagram,
				"facebook"=>$facebook,
				"twitter"=>$twitter,
				"linkedin"=>$linkedin

			);
		}


		$this->Modeladmin->addMaster($data);
		$this->staff();
		}else{
			$this->load->view('admin/login_form');
		}

	}


	public function deleteM(){
		if(isset($this->session->userdata['logged_in'])){
			$m_id=$this->input->post('m_id');
		$result=$this->Modeladmin->deleteM($m_id);
		echo "deleted";
		}else{
			$this->load->view('admin/login_form');
		}

	}


	// slider bottom
	public function sliderbt(){
		if(isset($this->session->userdata['logged_in'])){
			$sliders=$this->Modeladmin->getsliderbt();
		$data=array(
			"slidersbt"=>$sliders
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/slider_bottom',$data);
		}else{
				$this->load->view('admin/login_form');
		}

	}

	public function addSldierbt(){
		if(isset($this->session->userdata['logged_in'])){
			$config['upload_path'] = 'assets/img/slider_bottom/';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);

		$title_slider=$this->input->post('title_slider');
		$text_slider=$this->input->post('text_slider');
		$s_visible=$this->input->post('s_visible');

		// $uplaod=$this->upload->do_upload("slider_image");
		if(isset($_FILES['slider_image'])){
		if($this->upload->do_upload("slider_image")){
			$data = array('upload_data' => $this->upload->data());
			$filename= $data['upload_data']['file_name'];
			// echo $title_slider."<br/>";
			// echo $text_slider."<br/>";
			if(isset($s_visible)){
				$s_visible=1;
			}else{
					$s_visible=0;
			}
			$data=array(
				"s_title"=>$title_slider,
				"s_body"=>$text_slider,
				"s_visible"=>$s_visible,
				"s_img"=>$filename
			);
		$result=$this->Modeladmin->AddSliderbt($data);
		}
		else{
			$result="error_uploaded";
			// echo $this->upload->display_errors();
		}
		}else{
			$result="";
			// echo $this->upload->display_errors();
		}

		$sliders=$this->Modeladmin->getsliderbt();
		$data=array(
			"slidersbt"=>$sliders,
			"result_upload"=>$result
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/slider_bottom',$data);
		}else{
			$this->load->view('admin/login_form');
		}



	}

	// Slider bottom Show/NotShow
	public function showSbt(){
		if(isset($this->session->userdata['logged_in'])){
			$s_id=$this->input->post('s_id');
		$result=$this->Modeladmin->showSbt($s_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}

	public function notshowSbt(){
		if(isset($this->session->userdata['logged_in'])){
			$s_id=$this->input->post('s_id');
		$result=$this->Modeladmin->notshowSbt($s_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}


// staff
	public function timer(){
		if(isset($this->session->userdata['logged_in'])){
			$result=$this->Modeladmin->getTimerAdmin();
		$data=array(
			"timers"=>$result
		);
		$this->load->view('admin/timer', $data);
		}else{
			$this->load->view('admin/login_form');
		}

	}

	// SetTimer
	public function SetTimer(){
		if(isset($this->session->userdata['logged_in'])){
			if ($this->input->post('timer')!= '') {
			$timer=$this->input->post('timer');
		$text_en=$this->input->post('text_en');
		$text_fa=$this->input->post('text_fa');
		$timer=explode(' ',$timer);
		$date=$timer[0];
		$time=$timer[1];
		$result=$this->Modeladmin->SetTimer($date,$time,$text_en,$text_fa);
		$result=$this->Modeladmin->getTimerAdmin();
		}else{
		$result=$this->Modeladmin->getTimerAdmin();
		}

		// echo "success";

		$data=array(
			"timers"=>$result
		);

		$this->load->view('admin/timer',$data);
		}else{
			$this->load->view('admin/login_form');
		}


	}
	// SetTimer

public function showT(){
	if(isset($this->session->userdata['logged_in'])){
		$m_id=$this->input->post('m_id');
		$result=$this->Modeladmin->showT($m_id);
		echo "success";
	}else{
		$this->load->view('admin/login_form');
	}

	}

	public function notshowT(){
		if(isset($this->session->userdata['logged_in'])){
			$m_id=$this->input->post('m_id');
		$result=$this->Modeladmin->notshowT($m_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}

	public function deleteT(){
		if(isset($this->session->userdata['logged_in'])){
			$m_id=$this->input->post('m_id');
		$result=$this->Modeladmin->deleteT($m_id);
		echo "deleted";
		}else{
				$this->load->view('admin/login_form');
		}

	}



// add newcourse
	public function newcourse(){
		if(isset($this->session->userdata['logged_in'])){
			$result=$this->Modeladmin->GetAllCourse();
	$data=array(
			"courses"=>$result
		);
	$this->load->view('admin/newcourse' , $data);
		}else{
				$this->load->view('admin/login_form');
		}

	}

	public function removeC(){
		if(isset($this->session->userdata['logged_in'])){
		$id=$this->input->post('id');
		$result=$this->Modeladmin->deleteC($id);
		echo "deleted";
		}else{
			$this->load->view('admin/login_form');
		}


	}

	public function addCourse(){
		if(isset($this->session->userdata['logged_in'])){
		$config['upload_path'] = 'assets/img/list';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';

		$Code=$this->input->post('Code');
		$course=$this->input->post('course');
		$instructor=$this->input->post('instructor');
		$sdate=$this->input->post('sdate');
		$edate=$this->input->post('edate');
		$Capacity=$this->input->post('Capacity');
		$Fee=$this->input->post('Fee');

		$Saturday_Start=$this->input->post('Saturday_Start');
		$Sunday_Start=$this->input->post('Sunday_Start');
		$Monday_Start=$this->input->post('Monday_Start');
		$Tuesday_Start=$this->input->post('Tuesday_Start');
		$Wednesday_Start=$this->input->post('Wednesday_Start');
		$Thursday_Start=$this->input->post('Thursday_Start');
		$Friday_Start=$this->input->post('Friday_Start');

		$Saturday_End=$this->input->post('Saturday_End');
		$Sunday_End=$this->input->post('Sunday_End');
		$Monday_End=$this->input->post('Monday_End');
		$Tuesday_End=$this->input->post('Tuesday_End');
		$Wednesday_End=$this->input->post('Wednesday_End');
		$Thursday_End=$this->input->post('Thursday_End');
		$Friday_End=$this->input->post('Friday_End');
		$Descreption=$this->input->post('Descreption');

		$days=$Hours=null;
		$status=false;
		if (!empty($Saturday_Start) && !empty($Saturday_End) ) {
			$days="1";
			$Hours=$Saturday_Start."-".$Saturday_End;
			$status=true;
		}
		if (!empty($Sunday_Start) && !empty($Sunday_End)  ) {
			if ($status) {
				$days=$days.";"."2";
				$Hours=$Hours.";".$Sunday_Start."-".$Sunday_End;
			}else{
				$days="2";
				$Hours=$Sunday_Start."-".$Sunday_End;
				$status=true;
			}

		}
		if (!empty($Monday_Start) && !empty($Monday_End) ) {
			if ($status) {
				$days=$days.";"."3";
				$Hours=$Hours.";".$Monday_Start."-".$Monday_End;
			}else{
				$days="3";
				$Hours=$Monday_Start."-".$Monday_Start;
				$status=true;
			}


		}
		if (!empty($Tuesday_Start) && !empty($Tuesday_End) ) {
			if ($status) {
				$days=$days.";"."4";
				$Hours=$Hours.";".$Tuesday_Start."-".$Tuesday_End;
			}else{
				$days="4";
				$Hours=$Tuesday_Start."-".$Tuesday_End;
				$status=true;
			}

		}
		if (!empty($Wednesday_Start) && !empty($Wednesday_End) ) {
			if ($status) {
				$days=$days.";"."5";
				$Hours=$Hours.";".$Wednesday_Start."-".$Wednesday_End;
			}else{
				$days="5";
				$Hours=$Wednesday_Start."-".$Wednesday_End;
				$status=true;
			}

		}
		if (!empty($Thursday_Start) && !empty($Thursday_End) ) {
			if ($status) {
				$days=$days.";"."6";
				$Hours=$Hours.";".$Thursday_Start."-".$Thursday_End;
			}else{
				$days="6";
				$Hours=$Thursday_Start."-".$Thursday_End;
				$status=true;
			}

		}
		if (!empty($Friday_Start) && !empty($Friday_End) ) {
			if ($status) {
				$days=$days.";"."7";
				$Hours=$Hours.";".$Friday_Start."-".$Friday_End;
			}else{
				$days="7";
				$Hours=$Friday_Start."-".$Friday_End;
				$status=true;
			}

		}

		// print_r($_POST);
		// print_r($_FILES);
		// die;
		$this->load->library('upload',$config);
		if(isset($_FILES['course_image'])){
		if($this->upload->do_upload("course_image")){
			$data = array('upload_data' => $this->upload->data());
			$course_img= $data['upload_data']['file_name'];
			$data=array(
				"Code"=>$Code,
				"Name"=>$course,
				"Days"=>$days,
				"Hours"=>$Hours,
				"SDate"=>$sdate,
				"EDate"=>$edate,
				"instructor"=>$instructor,
				"Capacity"=>$Capacity,
				"Fee"=>$Fee,
				"course_img"=>$course_img,
				"course_descreption"=>$Descreption
			);

			$this->Modeladmin->addCourse($data);
		}
	}


		$result=$this->Modeladmin->GetAllCourse();
	$data=array(
			"courses"=>$result
		);
	$this->load->view('admin/newcourse' , $data);
		}else{
			$this->load->view('admin/login_form');
		}

	}



		// submit contact us
		public function contactus(){
			$email=$this->input->post('email');
			$firstname=$this->input->post('firstname');
			$message=$this->input->post('message');
			$date=date("Y-m-d H:i:s");
			$data=array(
				"email"=>$email,
				"firstname"=>$firstname,
				"message"=>$message,
				"date_created"=>$date
			);
		$result=$this->Modeladmin->contactus($data);
		echo $result;
		}

		public function getcontact()
		{
			if(isset($this->session->userdata['logged_in'])){
				$contactus=$this->Modeladmin->getcontactus();
			$data=array(
				"contactus"=>$contactus
			);
			// $this->smarty->view( 'home.tpl', $data );
			$this->load->view('admin/contactus',$data);
			}else{
				$this->load->view('admin/login_form');
			}

		}


		// submit contact us

	// upload resume
	public function upload_resume(){
		$config['upload_path'] = 'assets/upload_resume';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);

		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$name=$this->input->post('name');
		$date=date("Y-m-d");

		// $uplaod=$this->upload->do_upload("slider_image");
		if(isset($_FILES['file_resume'])){
		if($this->upload->do_upload("file_resume")){
			$data = array('upload_data' => $this->upload->data());
			$filename= $data['upload_data']['file_name'];
			// echo $title_slider."<br/>";
			// echo $text_slider."<br/>";

			$data=array(
				"name"=>$name,
				"email"=>$email,
				"phone"=>$phone,
				"file_resume"=>$filename,
				"date_created"=>$date
			);
		$result=$this->Modeladmin->resume($data);
		echo "success";
		}
		else{
			// $result="error_uploaded";
			// echo $this->upload->display_errors();
			echo "error_uploaded";
		}
		}


	}



  // get all News
	public function news()
	{
		if(isset($this->session->userdata['logged_in'])){
			$news=$this->Modeladmin->getnews();
		$data=array(
			"news"=>$news
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/news',$data);
		}else{
			$this->load->view('admin/login_form');
		}

	}

	public function addNews(){
		if(isset($this->session->userdata['logged_in'])){
			$news_title_en=$this->input->post('news_title_en');
			$news_title_fa=$this->input->post('news_title_fa');
			$news_show=$this->input->post('news_show');
			if($news_show=="on"){$news_show=1;}else{$news_show=0;}
			$date=date("Y-m-d");

			$data=array(
				"news_title_en"=>$news_title_en,
				"news_title_fa"=>$news_title_fa,
				"date_created"=>$date,
				"news_show"=>$news_show
			);
			$this->Modeladmin->addNews($data);
		
			redirect('/Admin/news');
		}else{
			$this->load->view('admin/login_form');
		}
	}

	public function trashNews(){
		if(isset($this->session->userdata['logged_in'])){
			$d_id=$this->input->post("id");
			$this->Modeladmin->removeNews($d_id);
			echo "success";
			}else{
			$this->load->view('admin/login_form');
			}
	}
	public function showNews(){
		if(isset($this->session->userdata['logged_in'])){
			$d_id=$this->input->post('id');
		$result=$this->Modeladmin->showNews($d_id);
		echo "success";
		}else{
				$this->load->view('admin/login_form');
		}

	}

	public function notshowNews(){
		if(isset($this->session->userdata['logged_in'])){
			$d_id=$this->input->post('id');
		$result=$this->Modeladmin->notshowNews($d_id);
		echo "success";
		}else{
			$this->load->view('admin/login_form');
		}

	}

  // get all resume
	public function resume()
	{
		if(isset($this->session->userdata['logged_in'])){
			$resumes=$this->Modeladmin->getresume();
		$data=array(
			"resumes"=>$resumes
		);
		// $this->smarty->view( 'home.tpl', $data );
		$this->load->view('admin/resume',$data);
		}else{
			$this->load->view('admin/login_form');
		}

	}

	public function gallery()
		{
			if(isset($this->session->userdata['logged_in'])){
				$gallery=$this->Modeladmin->getgallery();
			$data=array(
				"gallery"=>$gallery
			);
			// $this->smarty->view( 'home.tpl', $data );
			$this->load->view('admin/gallery',$data);
			}else{
				$this->load->view('admin/login_form');
			}

		}


		public function removeGa(){
			if(isset($this->session->userdata['logged_in'])){
			$d_id=$this->input->post("d_id");
			$this->Modeladmin->removeGa($d_id);
			echo "success";
			}else{
			$this->load->view('admin/login_form');
			}

		}



		// static page

		public function updatepage()
		{
			$config['upload_path'] = 'assets/static';
			$config['max_filename'] = '255';
			$config['encrypt_name'] = FALSE;
			$config['max_size'] = '5120 '; //5 MB 5120
			$config['allowed_types'] = '*';
			$this->load->library('upload',$config);

		// $uplaod=$this->upload->do_upload("slider_image");
		$filename=false;
		if(isset($_FILES['image1'])){
		if($this->upload->do_upload("image1")){
			$data = array('upload_data' => $this->upload->data());
			$filename= $data['upload_data']['file_name'];
		}
	}


			$id=$this->input->post("id");
			$title=$this->input->post("title");
			$title1=$this->input->post("title1");
			$body1=$this->input->post("body1");
			$title2=$this->input->post("title2");
			$body2=$this->input->post("body2");

			$title3=$this->input->post("title3");
			$collapse_title_1=$this->input->post("collapse_title_1");
			$collapse_title_2=$this->input->post("collapse_title_2");
			$collapse_title_3=$this->input->post("collapse_title_3");
			$collapse_title_4=$this->input->post("collapse_title_4");
			$collapse_title_5=$this->input->post("collapse_title_5");
			$collapse_title_6=$this->input->post("collapse_title_6");

			$collapse_body_1=$this->input->post("collapse_body_1");
			$collapse_body_2=$this->input->post("collapse_body_2");
			$collapse_body_3=$this->input->post("collapse_body_3");
			$collapse_body_4=$this->input->post("collapse_body_4");
			$collapse_body_5=$this->input->post("collapse_body_5");
			$collapse_body_6=$this->input->post("collapse_body_6");

			$arra=[
				["0"=>$collapse_title_1,
				"1"=>$collapse_body_1],
				["0"=>$collapse_title_2,
				"1"=>$collapse_body_2],
				["0"=>$collapse_title_3,
				"1"=>$collapse_body_3],
				["0"=>$collapse_title_4,
				"1"=>$collapse_body_4],
				["0"=>$collapse_title_5,
				"1"=>$collapse_body_5],
				["0"=>$collapse_title_6,
				"1"=>$collapse_body_6]
			];
			$collapse=json_encode($arra,JSON_UNESCAPED_UNICODE);

			if($filename==false){
				$data=array(
					"page_title"=>$title,
					"title1"=>$title1,
					"body1"=>$body1,
					"title2"=>$title2,
					"body2"=>$body2,
					"title3"=>$title3,
					"body3"=>$collapse
				);
			}else{
				$data=array(
					"page_title"=>$title,
					"image1"=>$filename,
					"title1"=>$title1,
					"body1"=>$body1,
					"title2"=>$title2,
					"body2"=>$body2,
					"title3"=>$title3,
					"body3"=>$collapse
				);
			}
			
			$this->Mstatic->Updatepage($data,$id);
			redirect('/Admin/pages');

		}
		public function editpage($id)
		{
			if(isset($this->session->userdata['logged_in'])){
				
				$page=$this->Mstatic->getdata($id);
			$data=array(
				"page"=>$page
			);
			// $this->smarty->view( 'home.tpl', $data );
			$this->load->view('admin/editpage',$data);
			}else{
				$this->load->view('admin/login_form');

			}

		}
		public function pages()
		{
			if(isset($this->session->userdata['logged_in'])){
				
				$allpages=$this->Mstatic->getAllPages();
			$data=array(
				"pages"=>$allpages
			);
			// $this->smarty->view( 'home.tpl', $data );
			$this->load->view('admin/static',$data);
			}else{
				$this->load->view('admin/login_form');

			}

		}

		public function delpage(){
			$id=$this->input->post("id");
			$this->Mstatic->delpage($id);
			echo "deleted";
			
		}
		public function notshowMenu(){
			$id=$this->input->post("m_id");
			$this->Mstatic->notshowMenu($id);
			echo "success";
		}
		public function showMenu(){
			$id=$this->input->post("m_id");
			$this->Mstatic->showMenu($id);
			echo "success";
		}
		
		public function addpage(){
			$config['upload_path'] = 'assets/static';
			$config['max_filename'] = '255';
			$config['encrypt_name'] = FALSE;
			$config['max_size'] = '5120 '; //5 MB 5120
			$config['allowed_types'] = '*';
			$this->load->library('upload',$config);

		// $uplaod=$this->upload->do_upload("slider_image");
		if(isset($_FILES['image1'])){
		if($this->upload->do_upload("image1")){
			$data = array('upload_data' => $this->upload->data());
			$filename= $data['upload_data']['file_name'];
		}
	}



			$title=$this->input->post("title");
			$title1=$this->input->post("title1");
			$body1=$this->input->post("body1");
			$title2=$this->input->post("title2");
			$body2=$this->input->post("body2");

			$title3=$this->input->post("title3");
			$collapse_title_1=$this->input->post("collapse_title_1");
			$collapse_title_2=$this->input->post("collapse_title_2");
			$collapse_title_3=$this->input->post("collapse_title_3");
			$collapse_title_4=$this->input->post("collapse_title_4");
			$collapse_title_5=$this->input->post("collapse_title_5");
			$collapse_title_6=$this->input->post("collapse_title_6");

			$collapse_body_1=$this->input->post("collapse_body_1");
			$collapse_body_2=$this->input->post("collapse_body_2");
			$collapse_body_3=$this->input->post("collapse_body_3");
			$collapse_body_4=$this->input->post("collapse_body_4");
			$collapse_body_5=$this->input->post("collapse_body_5");
			$collapse_body_6=$this->input->post("collapse_body_6");

			$arra=[
				["0"=>$collapse_title_1,
				"1"=>$collapse_body_1],
				["0"=>$collapse_title_2,
				"1"=>$collapse_body_2],
				["0"=>$collapse_title_3,
				"1"=>$collapse_body_3],
				["0"=>$collapse_title_4,
				"1"=>$collapse_body_4],
				["0"=>$collapse_title_5,
				"1"=>$collapse_body_5],
				["0"=>$collapse_title_6,
				"1"=>$collapse_body_6]
			];
			$collapse=json_encode($arra,JSON_UNESCAPED_UNICODE);

			$data=array(
				"page_title"=>$title,
				"image1"=>$filename,
				"title1"=>$title1,
				"body1"=>$body1,
				"title2"=>$title2,
				"body2"=>$body2,
				"title3"=>$title3,
				"body3"=>$collapse
			);
			$allpages=$this->Mstatic->Addpage($data);
			redirect('/Admin/pages');
		} 




		// file_dpwnload
		function file_dpwnload(){
			$d_id=$this->input->post("d_id");
			$number_of_download=$this->ModelDownloads->file_dpwnload($d_id);
			echo  $number_of_download;
		}

}





