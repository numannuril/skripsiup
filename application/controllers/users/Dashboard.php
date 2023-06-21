<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	
	// 	if($this->session->userdata('level') != "users"){
	// 		redirect(base_url("login"));
	// 	}
	// }
	public function index()
    {
        //load model
        $this->load->view('users/dashboard');
    }
	
}
	

