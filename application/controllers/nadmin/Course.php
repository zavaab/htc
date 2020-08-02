<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Course extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        
        $this->load->model('elalg_courses');

		// include APPPATH . 'third_party/PersianCalendar.php';
    }


    public function new_course()
    {
       
        $res=$this->elalg_courses->get_elalg_courses();
        $data['list_courses']=$res;
        $this->load->view('users/user/header');
        $this->load->view('users/admin/new_course' , $data);
        $this->load->view('users/user/footer');
    }

    public function edit($course_code)
    {
       
        $res=$this->elalg_courses->get_elalg_courses();


        
        $data['list_courses']=$res;
        $data['edit_course_code']=$course_code;
        $this->load->view('users/user/header');
        $this->load->view('users/admin/new_course' , $data);
        $this->load->view('users/user/footer');
        
    }
    public function delete($course_code)
    {
        $res=$this->elalg_courses->get_elalg_courses();
        $data['list_courses']=$res;

        $this->load->view('users/user/header');
        $this->load->view('users/admin/new_course' , $data);
        $this->load->view('users/user/footer');

    }
    
    public function new()
    {
        $new_course=$this->input->post('new_course');
        $this->elalg_courses->new_elalg_courses($new_course);

        $res=$this->elalg_courses->get_elalg_courses();
        $data['list_courses']=$res;

        $this->load->view('users/user/header');
        $this->load->view('users/admin/new_course' , $data);
        $this->load->view('users/user/footer');

    }

    
    public function update()
    {
        $update_course=$this->input->post('update_course');
        $course_code=$this->input->post('course_code');
        $this->elalg_courses->update_elalg_courses($update_course,$course_code);

        $res=$this->elalg_courses->get_elalg_courses();
        $data['list_courses']=$res;

        $this->load->view('users/user/header');
        $this->load->view('users/admin/new_course' , $data);
        $this->load->view('users/user/footer');

        
    }


}