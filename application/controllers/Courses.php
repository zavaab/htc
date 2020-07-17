<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Courses extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->model('Modellist');
		$this->load->model('Mstatic');
	}

	public function static1($id){
		$dataall=$this->Mstatic->getdata($id);
		$menus=$this->Mstatic->mnu();
		$body["body"]=$dataall;
		$data['title']=$dataall['page_title'];
		$data['statics_menus']=$menus;
		
		$this->load->view('front/navbar_home',$data);
		$this->load->view('front/courses/static',$body);
	}

	public function toefl(){
		$site_lang=$this->session->userdata('site_lang');
		if($site_lang=="persian"){
			$data['title']="تافل";
			$this->load->view('front/navbar_home',$data);
			$this->load->view('front/courses/toeflp');
			$this->load->view('front/footer');
		}else{
			$data['title']="TOEFL";
			$this->load->view('front/navbar_home',$data);
			$this->load->view('front/courses/toefle');
			$this->load->view('front/footer');
		}

	}

	public function ielts(){
		$data['title']="IELTS";
		$this->load->view('front/navbar',$data);
		$this->load->view('front/courses/ielts');	
		$this->load->view('front/footer');
	}

	public function tesol(){
		$site_lang=$this->session->userdata('site_lang');
		if($site_lang=="persian"){
			$data['title']="تسول";
			$this->load->view('front/navbar_home',$data);
			$this->load->view('front/courses/tesolp');
			$this->load->view('front/footer');
		}else{
			$data['title']="TESOL";
			$this->load->view('front/navbar_home',$data);
			$this->load->view('front/courses/tesole');
			$this->load->view('front/footer');
		}


	}

	public function gre(){
		$site_lang=$this->session->userdata('site_lang');
		if($site_lang=="persian"){
			$data['title']="جی آر ای";
			$this->load->view('front/navbar_home',$data);
			$this->load->view('front/courses/grep');
			$this->load->view('front/footer');
		}else{
			$data['title']="GRE";
			$this->load->view('front/navbar_home',$data);
			$this->load->view('front/courses/gree');
			$this->load->view('front/footer');
		}


	}
	
	public function listcourse(){
		$list=$this->Modellist->listcourse();
		$data['title']="LIST OF COURSES";
		$data['list']=$list;
		$this->load->view('front/navbar',$data);
		$this->load->view('front/courses/list' , $data);
	}

	





	}
