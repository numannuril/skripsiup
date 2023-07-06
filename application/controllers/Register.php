<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_register'); // Memuat model User_model
    }

    public function index() {
        $data = array(
            'jenis_kelamin'	=> $this->m_register->get_jenis_kelamin()->result(),
			'pilihan'		=> $this->m_register->get_pilihan()->result()
        );
        //load view
        $this->load->view('register', $data);
    }


    public function simpan() {
        // Get data dari form
        $nama_calon     = $this->input->post('nama_calon');
        $nisn           = $this->input->post('nisn');
        $no_hp          = $this->input->post('no_hp');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $asal_sekolah   = $this->input->post('asal_sekolah');
        $jenis_kelamin  = $this->input->post('jenis_kelamin_id_jenis');
        $pilihan        = $this->input->post('pilihan_id_pilihan');
        // Validasi minimal tanggal lahir
        $tanggal_min = '2000-01-01'; // Tanggal minimal yang diinginkan
        if ($tanggal_lahir < $tanggal_min) {
            $this->session->set_flashdata('error', 'Tanggal lahir minimal adalah ' . $tanggal_min);
            redirect('register');
        }
        // Validasi maksimal tanggal lahir
        $tanggal_max = '2015-01-01'; // Menggunakan tanggal saat ini sebagai batas maksimal
        if ($tanggal_lahir > $tanggal_max) {
            $this->session->set_flashdata('error', 'Tanggal lahir maksimal adalah ' . $tanggal_max);
            redirect('register');
        }

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
            $this->m_register->simpan_siswa($data);
            // Mengambil data pengguna yang baru terdaftar
            // Menampilkan data pengguna yang berhasil terdaftar
            redirect('login');
        }
    }
}