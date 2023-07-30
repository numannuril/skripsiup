<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orangtua extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_profile');
	}

	// function __construct(){
	// 	parent::__construct();
	
	// 	if($this->session->userdata('level') != "users"){
	// 		redirect(base_url("login"));
	// 	}
	// }
	public function index()
{
    $data = array(
        'pekerjaan'	=> $this->m_profile->get_pekerjaan()->result()
    );
    // Menampilkan halaman data diri dengan data calon siswa
    $this->load->view('users/orangtua', $data);
}

public function simpan()
{
    // Mengambil data dari form
    $nama_ayah    = $this->input->post('nama_ayah');
    $nik_ayah           = $this->input->post('nik_ayah');
    $email_ayah          = $this->input->post('email_ayah');
    $no_hp_ayah          = $this->input->post('no_hp_ayah');
    $alamat_ayah   = $this->input->post('alamat_ayah');
    $pekerjaan_ayah  = $this->input->post('pekerjaan_ayah_id_pekerjaan');

    $data_ayah = array(
        'nama_ayah'    => $nama_ayah,
        'nik_ayah'     => $nik_ayah,
        'email_ayah'   => $email_ayah,
        'no_hp_ayah'   => $no_hp_ayah,
        'alamat_ayah'  => $alamat_ayah,
        'pekerjaan_ayah_id_pekerjaan' => $pekerjaan_ayah
    );

    $nama_ibu    = $this->input->post('nama_ibu');
    $nik_ibu          = $this->input->post('nik_ibu');
    $email_ibu          = $this->input->post('email_ibu');
    $no_hp_ibu         = $this->input->post('no_hp_ibu');
    $alamat_ibu   = $this->input->post('alamat_ibu');
    $pekerjaan_ibu  = $this->input->post('pekerjaan_ibu_id_pekerjaan');

    $data_ibu = array(
        'nama_ibu'    => $nama_ibu,
        'nik_ibu'          => $nik_ibu,
        'email_ibu'         => $email_ibu,
        'no_hp_ibu'         => $no_hp_ibu,
        'alamat_ibu'  => $alamat_ibu,
        'pekerjaan_ibu_id_pekerjaan' => $pekerjaan_ibu
    );

    $this->m_profile->simpan_ayah($data_ayah);
    $this->m_profile->simpan_ibu($data_ibu);
    $this->session->set_flashdata('success_message', 'Data orang tua telah berhasil disimpan.');
    redirect('users/upload_berkas');
}
}