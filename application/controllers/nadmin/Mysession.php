<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mysession extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        
        $this->load->model('elalg_session');
        $this->load->model('elalg_users');

		include APPPATH . 'third_party/PersianCalendar.php';
    }


   

    public function new_session()
    {
        $title_session=$this->input->post('title_session');
        $natioanl_id=$this->input->post('natioanl_id');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');

        $end_date1=explode(' ' , $end_date);
        $start_date1=explode(' ' , $start_date);
        $day_fa=$this->faTOen($end_date1[1]);
        $year_fa=$this->faTOen($end_date1[3]);
        $momnth_fa=$this->convert_month($end_date1[2]);
        $end_date_en=implode('-',mds_to_gregorian($year_fa , $momnth_fa  , $day_fa));
        $day_fa=$this->faTOen($start_date1[1]);
        $year_fa=$this->faTOen($start_date1[3]);
        $momnth_fa=$this->convert_month($start_date1[2]);
        $start_date_en=implode('-',mds_to_gregorian($year_fa , $momnth_fa  , $day_fa));

        $data_insert=array(
            "session_title"=>$title_session,
            "session_start_date_en"=>$start_date_en,
            "session_start_date_fa"=>$start_date,
            "session_end_date_en"=>$end_date_en,
            "session_end_date_fa"=>$end_date,
            'natioanl_numbr'=>$natioanl_id,
            'session_status'=>0
        );
        $this->elalg_session->new_elalg_session($data_insert);
        $res=$this->elalg_users->user_info($natioanl_id);
        $list_session=$this->elalg_session->get_elalg_session($natioanl_id);
            $data['list_session']=$list_session;
    
            if(isset($res[0])){$data['user']=$res[0];$data['natioanl_id']=$natioanl_id;}else{$data['user']=null;$data['natioanl_id']="";}
            // print_r($data);die;
			$this->load->view('users/user/header');
			$this->load->view('users/admin/new_sesson' ,$data);
			$this->load->view('users/user/footer');

    }

    public function details($session_code)
    {
        date_default_timezone_set("Asia/Tehran");
        $time_now = date('G:i:s');
        $time_now=strtotime($t)."<br/>";
        $time_10_day=strtotime("10:00:00")."<br/>";
        $time_22_day=strtotime("22:00:00")."<br/>";
        $data['permit_edit']=0;

            $data['session_code']=$session_code;

            $usrlogin=$this->session->userdata['usrlogin'];
            // print_r($usrlogin);die;
            $user_type=($usrlogin['user']->user_type==0 ?  "user" : "admin" );

            if($user_type=="admin"){
                $data['permit_edit']=1;
            }else{
                $Session_info=$this->elalg_session->Session_info($session_code);
                $Session_info=$Session_info[0];
                
                $date_en_now=date('Y-m-d');
                
                $session_end_date_en = date("y-m-d", strtotime($Session_info->session_end_date_en));
                $today = date("y-m-d", strtotime($date_en_now));

                if($Session_info->session_status==1){
                    $data['permit_edit']=2;
                    // تکمیل
                }else if(($session_end_date_en == $today) && ($time_now <= $time_22_day ) && ($time_now>=$time_10_day) ){
                    $data['permit_edit']=1;
                }else{
                    $data['permit_edit']=0;
                }
            }
            
            




            

            $res=$this->elalg_session->Session_getdetails($session_code);

            
            $user_session_info=$this->elalg_session->Session_user_info($session_code);
            $data['session_user_info']=$user_session_info[0];
            $data['session_details']=$res;
            

            $this->load->view('users/user/header');
			$this->load->view('users/admin/details' , $data);
			$this->load->view('users/user/footer');
    }

    public function add_details()
    {
        date_default_timezone_set("Asia/Tehran");
        $date_en=date('Y-m-d H:i:s');
        $date_fa=mds_date("l j F Y , i : H", time(), 0);
        
        $session_code=$this->input->post('session_code');
        $title=$this->input->post('title');
        $comment=$this->input->post('comment');
        $editor1=$this->input->post('editor1');



        $config['upload_path'] = 'assets/upload_sessions';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '5120 '; //5 MB 5120
		$config['allowed_types'] = '*';
        $this->load->library('upload',$config);
        
        $ar = array();
        $files=$_FILES['files'];

        $file_names_uploaded=null;
        if(isset($_FILES['files']['name'])){
            $count=count($_FILES['files']['name']);

            foreach ($files['name'] as $key => $image) {
                $_FILES['ar[]']['name']= $files['name'][$key];
                $_FILES['ar[]']['type']= $files['type'][$key];
                $_FILES['ar[]']['tmp_name']= $files['tmp_name'][$key];
                $_FILES['ar[]']['error']= $files['error'][$key];
                $_FILES['ar[]']['size']= $files['size'][$key];
                $fileName =$files['name'][$key];
                $ar[] = $fileName;
                $config['file_name'] = $fileName;
                $this->upload->initialize($config);

                if ($this->upload->do_upload('ar[]')) {
                    $file_names_uploaded="assets/upload_sessions/".$this->upload->data()['file_name']."||".$file_names_uploaded;
                } else {
                    echo "false";
                }
                // print_r($ar);
            }
            
            $file_names_uploaded=rtrim($file_names_uploaded,"||");
           
        }


        $usrlogin=$this->session->userdata['usrlogin'];
        // print_r($usrlogin);die;
        $user_type=($usrlogin['user']->user_type==0 ?  "user" : "admin" );
        $data=array(
            "session_code"=>$session_code,
            "session_title"=>$title,
            "session_comment"=>$comment,
            "session_editor1"=>$editor1,
            "session_files_names"=>$file_names_uploaded,
            "session_date_fa"=>utf8_encode($date_fa),
            "session_date_en"=>$date_en,
            "session_owner"=>$user_type
        );
        // print_r($data);die;
        
        $this->elalg_session->addSession_details($data);

        // 
        $data['session_code']=$session_code;


            $res=$this->elalg_session->Session_getdetails($session_code);
            $user_session_info=$this->elalg_session->Session_user_info($session_code);
            $data['session_user_info']=$user_session_info[0];
            $data['session_details']=$res;

            $this->load->view('users/user/header');
			$this->load->view('users/admin/details' , $data);
			$this->load->view('users/user/footer');
        // 
        
    }



    

    public function change_status(){
        $session_code=$this->input->post("session_code");
        $this->elalg_session->change_status($session_code);
    }


    function faTOen($string) {
        return strtr($string, array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
    }
    function convert_month($mname){
        switch($mname){
            case 'فروردین':
            return 1;
            case 'اردیبهشت':
            return 2;
            break;
            case 'خرداد':
            return 3;
            break;
            case 'تیر':
            return 4;
            break;
            case 'مرداد':
            return 5;
            break;
            case 'شهریور':
            return 6;
            break;
            case 'مهر':
            return 7;
            break;
            case 'آبان':
            return 8;
            break;
            case 'آذر':
            return 9;
            break;
            case 'دی':
            return 10;
            break;
            case 'بهمن':
            return 11;
            break;
            case 'اسفند':
            return 12;
            break;
        }
    }


}