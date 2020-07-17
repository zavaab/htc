<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realreg extends CI_Controller {
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
    
	}

	public function CheckCode(){
		$phone=$this->input->post('phone');
		$code=$this->input->post('code');
		
		$res=$this->SendSMS($phone);
		if($res==1){
			echo "success";
		}else if($res==0){
			echo "false";
		}
	}

	function SendSMS($phone){
		return 1;
		// $KavenegarApi =new KavenegarApi("59594A482B2F574C544E4F424B414279595041536E5268424B6A327179756C6E53546569726151554D6C413D" , false);
		// $sms=$KavenegarApi->Send("10000500550500", "$phone", "$code", $date = null, $type = null, $localid = null);
		// echo $res;
	}



}
