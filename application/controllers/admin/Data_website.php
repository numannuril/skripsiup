<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_website extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('m_alur'); // Memuat model User_model
	
		if($this->session->userdata('level') != "admin"){
			redirect(base_url("login"));
		}
	}
	
	public function index()
    {

        $data = array(
            'data_alur' => $this->m_alur->get_alur()->result()
        );
		$this->load->view('admin/data_website', $data);
	}
	public function simpan() {
			// Get data dari form
			$tanggal     = $this->input->post('tanggal');
			$judul     = $this->input->post('judul');
			$alur           = $this->input->post('alur');
        //load view
		$data = array(
            'tanggal'    => $tanggal,
            'alur'          => $alur,
			'judul'        => $judul
		);
		$this->m_alur->simpan_alur($data);
        $this->load->view('admin/data_website');
    }
	public function hapus($id)
    {
    
        $where = array('id_website' => $id);
        $this->m_alur->hapus_alur($where,'website');
    
        redirect('admin/data_website');
    }
}
