<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->model('Modeladmin');
		// include APPPATH . 'third_party/PersianCalendar.php';
		include APPPATH . 'third_party/KavenegarApi.php';
	}

	public function index()
	{
		echo "ok";
	}
	public function register()
	{
		$firstname_en=$this->input->post('firstname_en');
		$lastname_en=$this->input->post('lastname_en');
		$firstname_fa=$this->input->post('firstname_fa');
		$lastname_fa=$this->input->post('lastname_fa');
		$mobile=$this->input->post('mobile');
		$email=$this->input->post('email');
		$comment=$this->input->post('comment');
		$date=date("Y-m-d");



		$moshavereh=array(
			"s_firstname_en"=>$firstname_en,
			"s_lastname_en"=>$lastname_en,
			"s_firstname_fa"=>$firstname_fa,
			"s_lastname_fa"=>$lastname_fa,
			"s_email"=>$email,
			"s_mobile"=>$mobile,
			"s_date"=>$date,
			"comment"=>"comment"
		);
		$res=$this->Modeladmin->register($moshavereh,$email);
		

		$KavenegarApi =new KavenegarApi("59594A482B2F574C544E4F424B414279595041536E5268424B6A327179756C6E53546569726151554D6C413D" , false);
		$sms=$KavenegarApi->Send("10000500550500", "09178326452", "ثبت نام انجام شد", $date = null, $type = null, $localid = null);
		echo $res;

	}




	public function reg_users()
	{
	

		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$fathername=$this->input->post('fathername');
		$sh_number=$this->input->post('sh_number');
		$national=$this->input->post('national');
		$bdate=$this->input->post('bdate');
		$mobile=$this->input->post('mobile');
		$job=$this->input->post('job');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$major=$this->input->post('major');
		$marital=$this->input->post('marital');
		$education=$this->input->post('education');
		$depart=$this->input->post('depart');
		$period=$this->input->post('period');
		// print_r($_POST);die("ok");

		$date=date("Y-m-d");



		$reg_users=array(
			"first_name"=>$firstname,
			"last_name"=>$lastname,
			"father_name"=>$fathername,
			"sh_number"=>$sh_number,
			"natioanl_numbr"=>$national,
			"username"=>$national,
			"b_date"=>$bdate,
			"job"=>$job,
			"email"=>$email,
			"password"=>$password,
			"major"=>$major,
			"marride"=>$marital,
			"education"=>$education,
			"depart"=>$depart,
			"requested_course"=>$period,
			"date"=>$date,
			"mobile"=>$mobile,
		);
		$res=$this->Modeladmin->reg_users($reg_users,$national);
		
		$msg="کاربر: ".$firstname." ".$lastname." ثبت نام شد.";
		
		if($res=="insert"){
			$KavenegarApi =new KavenegarApi("59594A482B2F574C544E4F424B414279595041536E5268424B6A327179756C6E53546569726151554D6C413D" , false);
			$sms=$KavenegarApi->Send("10001000990044", "09123068775", $msg, $date = null, $type = null, $localid = null);
			echo "insert";
		}else if($res=="duplicate"){
			echo "duplicate";
		}else{
			echo "error";
		}

		

	}








}
