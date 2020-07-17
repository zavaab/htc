<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->model('Modeladmin');
		$this->load->model('Mstatic');
		// include APPPATH . 'third_party/PersianCalendar.php';
	}

	public function index()
	{
		// $this->output->cache(60);
		$this->output->delete_cache();
		$date=$this->getTimer();
		$sliders=$this->Modeladmin->getsliderv();
		$students_comment=$this->Modeladmin->students_comment();
		$masters=$this->Modeladmin->masters();
		$welcome=$this->Modeladmin->getwelcome();
		$slider_bottom=$this->Modeladmin->getslider_bottom();
		$news=$this->Modeladmin->getnews();

		$menus=$this->Mstatic->mnu();
		

		$data=array(
			"sliders"=>$sliders,
			"students_comment"=>$students_comment,
			"masters"=>$masters,
			"welcome"=>$welcome,
			"slider_bottom"=>$slider_bottom,
			"date"=>$date,
			"news"=>$news,
			"statics_menus"=>$menus
		);
		// $this->smarty->view( 'home.tpl', $data );
		$data['title']="ENLEARNIA LANGUAGE ACADEMY";
		$this->load->view('front/navbar_home',$data);
		$this->load->view('front/home',$data);
	}



	// SetTimer
	public function getTimer(){
	$result=$this->Modeladmin->getTimer();
	$date=$result[0]->date;
	$clock=$result[0]->clock;
	$text_en=$result[0]->text_en;
	$text_fa=$result[0]->text_fa;
	$date=explode('-', $date);
	$year=$date[0];
	$month=$date[1];
	$day=$date[2];
	switch ($month) {
		case '01':$mm='January';break;case '02':$mm='February';break;
		case '03':$mm='March';break;case '04':$mm='April';break;
		case '05':$mm='May';break;case '06':$mm='June';break;
		case '07':$mm='July';break;case '08':$mm='August';break;
		case '09':$mm='September';break;case '10':$mm='October';break;
		case '11':$mm='November';break;case '12':$mm='December';break;
	}
	$datee=array('month'=>$mm,"day"=>$day,"year"=>$year,"clock"=>$clock,"text_en"=>$text_en,"text_fa"=>$text_fa);
	return $datee;
		
	}


}
