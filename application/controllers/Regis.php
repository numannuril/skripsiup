<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {

    // public function index()
    // {
        //load model
        // $this->load->model('m_register');

        // $data = array(
        //     'jenis_kelamin'	=> $this->m_register->get_jenis_kelamin()->result(),
		// 	'pilihan'		=> $this->m_register->get_pilihan()->result()
        // );
        //load view
        // $this->load->view('regis');
    // }


    // public function simpan()
// {
    // Load model
    // $this->load->model('m_regis');

    // Get data dari form
    // $nama_lengkap     = $this->input->post('nama_lengkap');
    // $username           = $this->input->post('username');
    // $email          = $this->input->post('email');
    // $password   = md5($this->input->post('password'));
    // $tanggal_lahir  = $this->input->post('tanggal_lahir');
    // $asal_sekolah   = $this->input->post('asal_sekolah');
    // $jenis_kelamin  = $this->input->post('jenis_kelamin_id_jenis');
    // $pilihan        = $this->input->post('pilihan_id_pilihan');

    // $data = array(
    //     'nama_lengkap'    => $nama_lengkap,
    //     'username'          => $username,
    //     'email'         => $email,
    //     'password'  => $password
        // 'tanggal_lahir' => $tanggal_lahir,
        // 'asal_sekolah'  => $asal_sekolah,
        // 'jenis_kelamin_id_jenis' => $jenis_kelamin,
        // 'pilihan_id_pilihan' => $pilihan
    // );

    // $input = $this->m_regis->simpan_admin($data);

    // if ($input) {
        // Redirect ke controller siswa
        // redirect('login');
    // } else {
        // Tampilkan pesan error jika gagal memasukkan data
        // redirect('regis');
    // }

    // Check username (NISN)
    // $username_check = $this->m_register->check_username($nisn);

    // if ($username_check == "NISN sudah terdaftar.") {
    //     // NISN sudah terdaftar, tampilkan pesan error
    //     $this->session->set_flashdata('error', 'Nomor NISN sudah digunakan sebelumnya');
    //     redirect('register');
    // } else {
    //     // Insert data via model
    //     $insert_result = $this->m_register->simpan_siswa($data);

    //     if ($insert_result) {
    //         // Redirect ke controller siswa
    //         redirect('users/dashboard');
    //     } else {
    //         // Tampilkan pesan error jika gagal memasukkan data
    //         $this->session->set_flashdata('error', 'Terjadi kesalahan dalam menyimpan data.');
    //         redirect('register');
    //     }
    // }
}

    

    // }