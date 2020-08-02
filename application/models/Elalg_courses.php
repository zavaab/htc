<?php
class Elalg_courses extends CI_Model {


    // login form
	public function get_elalg_courses(){
        $this->db->select('*');
		$this->db->from('elalg_courses');
		$query = $this->db->get();
		return $query->result();
    }

    public function new_elalg_courses($course_name){
        $this->db->select_max('id', 'max_id');
        $query = $this->db->get('elalg_courses');
        $row=$query->row();
        
        if($query->num_rows()==1){
            $max_id=$row->max_id;
        }else{
            $max_id=1;
        }
        $max_id=(int)$max_id;
        $max_id++;
        $course_code="elalg_c".$max_id;
        $data=array(
            "course_code"=>$course_code,
            "course_name"=>$course_name,
        );
        $this->db->insert('elalg_courses', $data);
    }

    public function update_elalg_courses($course_name, $course_code){
        
        $data=array(
            "course_name"=>$course_name,
        );
        $this->db->where('course_code', $course_code);
        $this->db->update('elalg_courses', $data);
    
    }
    
    

}