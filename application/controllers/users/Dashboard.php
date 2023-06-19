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
        $this->load->model('m_dashboard');

        
        //load view
		$data['data_calon']= $this->m_dashboard->get_member_by_id($this->session->userdata('id_calon'));
        $this->load->view('users/dashboard', $data);
    }
	
}
	

