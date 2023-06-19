<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        //load model
        $this->load->model('m_register');

        $data = array(
            'jenis_kelamin'	=> $this->m_register->get_jenis_kelamin()->result(),
			'pilihan'		=> $this->m_register->get_pilihan()->result()
        );
        //load view
        $this->load->view('register', $data);
    }


    public function simpan()
{
    // Load model
    $this->load->model('m_register');

    // Get data dari form
    $nama_calon     = $this->input->post('nama_calon');
    $nisn           = $this->input->post('nisn');
    $no_hp          = $this->input->post('no_hp');
    $tempat_lahir   = $this->input->post('tempat_lahir');
    $tanggal_lahir  = $this->input->post('tanggal_lahir');
    $asal_sekolah   = $this->input->post('asal_sekolah');
    $jenis_kelamin  = $this->input->post('jenis_kelamin_id_jenis');
    $pilihan        = $this->input->post('pilihan_id_pilihan');

    $data = array(
        'nama_calon'    => $nama_calon,
        'nisn'          => $nisn,
        'no_hp'         => $no_hp,
        'tempat_lahir'  => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'asal_sekolah'  => $asal_sekolah,
        'jenis_kelamin_id_jenis' => $jenis_kelamin,
        'pilihan_id_pilihan' => $pilihan

    );

    // Check username (NISN)
    $username_check = $this->m_register->check_username($nisn);

    if ($username_check == "NISN sudah terdaftar.") {
        // NISN sudah terdaftar, tampilkan pesan error
        $this->session->set_flashdata('error', 'Nomor NISN sudah digunakan sebelumnya');
        redirect('register');
    } else {
        // Insert data via model
        $insert_result = $this->m_register->simpan_siswa($data);

        if ($insert_result) {
            // Redirect ke controller siswa
            redirect('users/dashboard');
        } else {
            // Tampilkan pesan error jika gagal memasukkan data
            $this->session->set_flashdata('error', 'Terjadi kesalahan dalam menyimpan data.');
            redirect('register');
        }
    }
}

    

    }