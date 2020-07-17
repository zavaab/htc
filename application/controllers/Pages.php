<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->model('ModelDownloads');
		include APPPATH . 'third_party/PersianCalendar.php';
	}


	public function login(){
		$date=mds_date("Y/m/d", "now" );
		$data=array(
			"title"=>$this->lang->line('LOGIN') ,
			"date"=>$date ,
		);
		// print_r($data);die;
		// $this->load->view('front/navbar_home',$data);
		$this->load->view('front/login' ,$data);
		//$this->load->view('fron/t/footer');

	}

	public function reg(){
		$date=mds_date("Y/m/d", "now" );
		$data=array(
			"title"=>$this->lang->line('REGISTER') ,
			"date"=>$date ,
		);
		// print_r($data);die;
		$this->load->view('front/navbar_home',$data);
		$this->load->view('front/register' ,$data);
		//$this->load->view('fron/t/footer');

	}


	public function about_us(){

		$data=array(
			"title"=>$this->lang->line('ABOUT_US') ,
		);
		// print_r($data);die;
		$this->load->view('front/navbar_home',$data);
		$this->load->view('front/aboutus' ,$data);
		$this->load->view('front/footer');

	}
	public function contact_us(){
        $data=array(
			"title"=>$this->lang->line('CONTACT_US') ,
		);
		// print_r($data);die;
		$this->load->view('front/navbar_home',$data);
		$this->load->view('front/contactus' ,$data);
	}

	public function toefl()
	{
		$result=$this->ModelDownloads->GetDownloads('TOEFL');
		// $i=0;
		// foreach ($result as $res) {
		// 	# code...
		// 	$d_text=$this->__trancate($res->d_text,100,'...');
		// 	$res->d_text=$d_text;
		// 	$result[$i]->d_text=$d_text;
		// }
		$data=array(
			"title"=>$this->lang->line('TOEFL') ,
			"data"=>$result
		);
		// print_r($data);die;
		$this->load->view('front/navbar_home',$data);
		$this->load->view('front/pages' ,$data);
	}
	public function ielts()
	{
		$result=$this->ModelDownloads->GetDownloads('IELTS');
		$data=array(
			"title"=>'IELTS',
			"data"=>$result
		);
		$this->load->view('front/pages' ,$data);
	}
	public function gre()
	{
		$result=$this->ModelDownloads->GetDownloads('GRE');
		$data=array(
			"title"=>'GRE',
			"data"=>$result
		);
		$this->load->view('front/pages' ,$data);
	}
	public function general()
	{
		$result=$this->ModelDownloads->GetDownloads('GENERAL');
		$data=array(
			"title"=>'GENERAL',
			"data"=>$result
		);
		$this->load->view('front/pages' ,$data);
	}


	// gallary
	public function folder()
	{

		$result=$this->ModelDownloads->GetGalleryFolder();
		$data=array(
			"title"=>'Folder Of Images',
			"galleryFolder"=>$result
		);
		$this->load->view('front/folder' ,$data);
	}
	// gallary
	public function gallery($id)
	{

		$result=$this->ModelDownloads->GetGallery($id);
		$data=array(
			"title"=>'Gallery',
			"gallery"=>$result
		);
		$this->load->view('front/galleryy' ,$data);
	}



	// details download
	public function detailsDownload($d_id){
		$result=$this->ModelDownloads->getDetailsDownload($d_id);
		$data=array(
			"detailsDownload"=>$result
		);
		$this->load->view('front/detailsDownload' ,$data);

	}


	public function __trancate($string, $limit, $pad="..."){
    $break=" ";

   // return with no change if string is shorter than $limit
   if(strlen($string) <= $limit) return $string;

   // is $break present between $limit and the end of the string?
   if(false !== ($breakpoint = strpos($string, $break, $limit))) {
     if($breakpoint < strlen($string) - 1) {
       $string = substr($string, 0, $breakpoint) . $pad;
     }
   }

   return $string;
}


}
