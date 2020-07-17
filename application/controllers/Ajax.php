<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
	}

	public function ajax()
	{
		sleep(2);
	
	$users = ['elclanrs', 'peter', 'john', 'mike'];
	
	echo json_encode(! in_array($_POST['fathername'], $users));
	}
	






}
