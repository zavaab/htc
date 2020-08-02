<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
		$this->load->model('elalg_courses');
        $this->load->model('elalg_users');
        $this->load->model('elalg_session');
		// include APPPATH . 'third_party/PersianCalendar.php';
    }
    

     
        public function new_prog()
        {
           
			$this->load->view('users/user/header');
			$this->load->view('users/admin/new_prog');
			$this->load->view('users/user/footer');
		}
 
        
        public function list_user()
        {
           
            $res=$this->elalg_users->list_user();
            $data["users"]=$res;
			$this->load->view('users/user/header');
			$this->load->view('users/admin/list_user' , $data);
			$this->load->view('users/user/footer');
		}
 
        public function list_progs()
        {
           
			$this->load->view('users/user/header');
			$this->load->view('users/admin/list_progs');
			$this->load->view('users/user/footer');
		}
 
        public function user_info($national_id)
        {

            $res=$this->elalg_users->user_info($national_id);
            if(isset($res[0])){$data['user']=$res[0];}else{$data['user']=null;}
			$this->load->view('users/user/header');
			$this->load->view('users/admin/user_info' , $data);
			$this->load->view('users/user/footer');
		}
 

        public function user_approve()
        {
            $natioanl_numbr=$this->input->post('natioanl_numbr');            
            $this->elalg_users->user_approve($natioanl_numbr);
            echo true;
		}
 

        public function new_sesson($natioanl_id)
        {
            $res=$this->elalg_users->user_info($natioanl_id);

            $list_session=$this->elalg_session->get_elalg_session($natioanl_id);
            $data['list_session']=$list_session;
            


            if(isset($res[0])){$data['user']=$res[0];$data['natioanl_id']=$natioanl_id;}else{$data['user']=null;$data['natioanl_id']="";}
            // print_r($data);die;
			$this->load->view('users/user/header');
			$this->load->view('users/admin/new_sesson' ,$data);
			$this->load->view('users/user/footer');
		}




}





