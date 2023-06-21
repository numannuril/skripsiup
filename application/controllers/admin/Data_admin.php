<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('level') != "admin"){
			redirect(base_url("login"));
		}
    }
	public function index()
    {
        //load model
        $this->load->model('m_tables');

        $data = array(
            'data_admin' => $this->m_tables->get_admin()->result()
        );
        //load view
        $this->load->view('admin/data_admin', $data);
    }
    public function hapus($id)
    {
    
        $this->load->model('m_tables');
    
        $where = array('id_admin' => $id);
        $this->m_tables->hapus_data($where,'admin');
    
        redirect('admin/data_admin');
    }
}
