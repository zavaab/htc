<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pay_register extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('Zarinpal');
        $this->load->helper(array('form','url','html'));
        $this->load->model('Modelpay');
        // include APPPATH . 'third_party/PersianCalendar.php';
	}

	public function index(){
		$this->load->view("payment");
	}

	public function register($code){
		if(isset($code)){
				$details=$this->Modelpay->getCourseDetails($code);
				$Fee=$details['Fee'];
				$Fee=100;
				$Name=$details['Name'];
				$mobile="09178326452";
				$email="zadougani@gmail.com";

					$merchant_id="e5e0001a-318a-11e9-b45f-005056a205be";
					$call_back = 'https://elalg.com/Pay_register/verify';
					$desc='Payment for Course'.$Name.' With Code '.$code;

					if($this->zarinpal->request($merchant_id , $Fee, $desc, $call_back, $mobile, $email)){
                $authority = $this->zarinpal->getAuthority();
                $authority=ltrim($authority,'0');
                $this->session->set_flashdata('authority', $authority);
                $this->session->set_flashdata('Fee', $Fee);
				$this->session->set_flashdata('desc', $desc);
                $date=date('Y-m-d');
                $data=array(
					"name"=>$Name,
					"code"=>$code,
                    'amount'=>$Fee,
                    'authority'=>$authority,
                    'mobile'=>$mobile,
                    'email'=>$email,
					'date'=>$date,
					"desc"=>$desc

                );
                     $this->Modelpay->insertPay($data);
                     $this->zarinpal->redirect();
            }
		}else{

		}
	}


	// recevid data from Bank
            function verify(){

                    //    start
                    $merchant_id="e5e0001a-318a-11e9-b45f-005056a205be";
                    $Fee=$this->session->flashdata('Fee');
                    $desc=$this->session->flashdata('desc');
                    $authority=$this->input->GET('Authority');
                    if($_GET['Status'] == 'OK'){
                        if($this->zarinpal->verify($merchant_id , $Fee, $authority)){
                            $refid = $this->zarinpal->getRefId();

										$this->Modelpay->updatePay($refid,$authority);
										// $Credit=$this->Model_pay->updatetblUsers($email,$amount);
                                            // $sess_data=$this->session->userdata['logged_in'];
                                        // $sess_data['ucredit']=$Credit;
                                    // $this->session->set_userdata('logged_in',$sess_data);
				// $this->session->set_flashdata('message_success', 'Register & Payment is done successfully.');
				$this->session->set_flashdata('payment_status',1);
                                 redirect('Ci_payment','refresh');
                        }
                        else{
                            $error = $this->zarinpal->getError();
							$error_text=$this->zarinpal->errorText($error);
							$this->session->set_flashdata('payment_status',2);
                            $this->session->set_flashdata('error', $error_text);

                            redirect('Ci_payment','refresh');

                            }
                        }
                        else{
                            //use cancel payment
							$error_text="Payment failed";
							$this->session->set_flashdata('payment_status',3);
                            $this->session->set_flashdata('error', $error_text);
                            redirect('Ci_payment','refresh');
                        }

                        // end


            }






	}
