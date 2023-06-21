<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('level') != "admin"){
			redirect(base_url("login"));
		}
	}
	public function index()
    {
        $this->load->model('m_tables');

        $data = array(
            'data_siswa' => $this->m_tables->get_siswa()->result()
        );
        
        //load view
		
        $this->load->view('admin/dashboard', $data);
    }
	
}
	

