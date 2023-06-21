<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri extends CI_Controller {

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
            'data_siswa' => $this->m_tables->get_siswa()->result()
        );
        //load view
        $this->load->view('admin/data_santri', $data);
    }
    public function hapus($id)
    {
    
        $this->load->model('m_tables');
    
        $where = array('id_calon' => $id);
        $this->m_tables->hapus_data($where,'calon_siswa');
    
        redirect('admin/data_santri');
    }
}
