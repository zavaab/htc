<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->model('elalg_users');
		$this->load->model('elalg_session');

		// include APPPATH . 'third_party/PersianCalendar.php';
    }
    
        public function method_index()
        {
			if(isset($this->session->userdata['usrlogin'])){
			$usrlogin=$this->session->userdata['usrlogin'];
			$data['usrlogin']=$usrlogin;
			$this->load->view('users/user/header',  $data);
			$this->load->view('users/user/home' ,$data);
			$this->load->view('users/user/footer');
			}else{
				redirect('/login');
			}
		}

		
        public function login()
        {
			if(isset($this->session->userdata['usrlogin'])){
				redirect('/users');
				}else{
					$this->load->view('/front/login' ,$data);
				}
		}

		public function logout()
        {
			if(isset($this->session->userdata['usrlogin'])){
				$this->session->unset_userdata('usrlogin');
				redirect('/login');
				}else{
					redirect('/login');
				}
		}
	 
		public function checklogin()
        {
			if(isset($this->session->userdata['usrlogin'])){
				
				$usrlogin=$this->session->userdata['usrlogin'];
				redirect('/users');

			}else{
				
				$national_id=$this->input->post('national_id');
				$password=$this->input->post('password');
				$user=$this->elalg_users->login($national_id, $password);
		
				if(count($user)==1){
				
					if($user[0]->user_type==1){
						$session_data = array(
							'user_type' => "admin",
							"user"=>$user[0]
							);
					}else{
						$session_data = array(
							'user_type' => "user",
							"user"=>$user[0]
							);
					}
					
						// Add user data in session
						$this->session->set_userdata('usrlogin', $session_data);
						redirect('/users');

				}else{
					redirect('/login');
				}
				
			}

		
			
		}



		public function list_progs(){

			
			
			$usrlogin=$this->session->userdata['usrlogin'];
			$data['usrlogin']=$usrlogin;

			$list_session=$this->elalg_session->get_elalg_session($usrlogin['user']->natioanl_numbr);
			
			$i=0;
			foreach ($list_session as $list) {
				$permmit=$this->check_permit($list->session_status , $list->session_end_date_en);
				
				$list_session[$i]->permit_edit=$permmit;
				// print_r($list);die;
				$i++;
			}
		    $data['list_session']=$list_session;
			
			$this->load->view('users/user/header');
			$this->load->view('users/admin/list_progs' , $data);
			$this->load->view('users/user/footer');
		}



    public function check_permit($session_status,$session_end_date_en){

		       date_default_timezone_set("Asia/Tehran");
				$time_now = date('G:i:s');
				$time_now=strtotime($time_now)."<br/>";
				$time_10_day=strtotime("10:00:00")."<br/>";
				$time_22_day=strtotime("22:00:00")."<br/>";
				$permit_edit=0;


				$usrlogin=$this->session->userdata['usrlogin'];
				// print_r($usrlogin);die;
				$user_type=($usrlogin['user']->user_type==0 ?  "user" : "admin" );

				if($user_type=="admin"){
					$permit_edit=1;
				}else{

					
					$date_en_now=date('Y-m-d');
					
					$session_end_date_en = date("y-m-d", strtotime($session_end_date_en));
					$today = date("y-m-d", strtotime($date_en_now));

					if($session_status==1){
						$permit_edit=2;
						// تکمیل
					}else if(($session_end_date_en == $today) && ($time_now <= $time_22_day ) && ($time_now>=$time_10_day) ){
						$permit_edit=1;
					}else{
						$permit_edit=0;
					}
				}

				return $permit_edit;

	}

}





