<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diri extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	
	// 	if($this->session->userdata('level') != "users"){
	// 		redirect(base_url("login"));
	// 	}
	// }
	public function index()
    {
        $this->load->view('users/data_diri');
    }
	
}
	

