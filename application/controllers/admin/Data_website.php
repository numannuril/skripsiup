<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_website extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('level') != "admin"){
			redirect(base_url("login"));
		}
	}
	public function index()
    {
        
        
        //load view
		
        $this->load->view('admin/data_website');
    }
	
}
