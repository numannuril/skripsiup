<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_berkas extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_register');
        $this->load->library('upload');
	}

	// function __construct(){
	// 	parent::__construct();
	
	// 	if($this->session->userdata('level') != "users"){
	// 		redirect(base_url("login"));
	// 	}
	// }
	public function index()
{
        
    // Menampilkan halaman data diri dengan data calon siswa
    $this->load->view('users/upload_berkas');
}

public function simpan()
{

    $id_calon = $this->input->post('id_calon');
    $data = array(
        'id_calon' => $id_calon,
        'akte_kelahiran' => $_FILES['akte_kelahiran']['name'],
        'pas_foto' => $_FILES['pas_foto']['name'],
        'kartu_keluarga' => $_FILES['kartu_keluarga']['name'],
        'ijazah' => $_FILES['ijazah']['name'],
        'skhun' => $_FILES['skhun']['name']
        // tambahkan kolom lainnya sesuai dengan struktur tabel
    );
    $this->upload_akte();
    $this->upload_kk();
    $this->upload_ijazah();
    $this->upload_skhun();

    // Upload file gambar
    $this->upload_foto();

    // Simpan data ke database
    $this->m_register->simpan_berkas($id_calon, $data);
    $this->session->set_flashdata('success_message', 'Data berkas telah berhasil disimpan.');
    redirect('sukses');
}


    public function upload_akte()
    {
        $config['upload_path'] = './uploads/Akte Kelahiran/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048; // maksimum ukuran file dalam kilobita (KB)
        $config['encrypt_name'] = FALSE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('akte_kelahiran'))
        {
            // Jika proses upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

    public function upload_kk()
    {
        $config['upload_path'] = './uploads/Kartu Keluarga/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048; // maksimum ukuran file dalam kilobita (KB)
        $config['encrypt_name'] = FALSE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('kartu_keluarga'))
        {
            // Jika proses upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

    public function upload_skhun()
    {
        $config['upload_path'] = './uploads/SKHUN/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048; // maksimum ukuran file dalam kilobita (KB)
        $config['encrypt_name'] = FALSE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('skhun'))
        {
            // Jika proses upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

    public function upload_ijazah()
    {
        $config['upload_path'] = './uploads/Ijazah Sekolah/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048; // maksimum ukuran file dalam kilobita (KB)
        $config['encrypt_name'] = FALSE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('ijazah'))
        {
            // Jika proses upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

    public function upload_foto()
    {
        $config['upload_path'] = './uploads/Pas foto/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // maksimum ukuran file dalam kilobita (KB)
        $config['encrypt_name'] = FALSE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('pas_foto'))
        {
            // Jika proses upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            echo $error;
        }
    }
}