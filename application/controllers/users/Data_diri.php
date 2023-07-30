<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diri extends CI_Controller {

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
    $id_calon = $this->session->userdata('id_calon');
        
    // Mengambil data calon siswa dari model
    $data['calon'] = $this->m_profile->get_calon($id_calon);
        
    // Menampilkan halaman data diri dengan data calon siswa
    $this->load->view('users/data_diri', $data);
}

public function simpan()
{
    // Mengambil data dari form
	$id_calon = $this->input->post('id_calon');
    $nama_calon     = $this->input->post('nama_calon');
    $nisn           = $this->input->post('nisn');
    $email          = $this->input->post('email');
    $no_hp          = $this->input->post('no_hp');
    $tempat_lahir   = $this->input->post('tempat_lahir');
    $tanggal_lahir  = $this->input->post('tanggal_lahir');
    $desa           = $this->input->post('desa');
    $kecamatan      = $this->input->post('kecamatan');
    $kabupaten      = $this->input->post('kabupaten');
    $propinsi       = $this->input->post('propinsi');
    $alamat         = $this->input->post('alamat');
    $asal_sekolah   = $this->input->post('asal_sekolah');
    $jenis_kelamin  = $this->input->post('jenis_kelamin_id_jenis');
    $ukuran_pakaian = $this->input->post('ukuran_pakaian');
    $pilihan        = $this->input->post('pilihan_id_pilihan');

    $data = array(
        'nama_calon'    => $nama_calon,
        'nisn'          => $nisn,
        'email'         => $email,
        'no_hp'         => $no_hp,
        'tempat_lahir'  => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'desa'          => $desa,
        'kabupaten'     => $kabupaten,
        'kecamatan'     => $kecamatan,
        'propinsi'      => $propinsi,
        'alamat'        => $alamat,
        'asal_sekolah'  => $asal_sekolah,
        'jenis_kelamin_id_jenis' => $jenis_kelamin,
        'ukuran_pakaian' => $ukuran_pakaian,
        'pilihan_id_pilihan' => $pilihan
    );

    $this->m_profile->edit_calon($id_calon, $data);
    $this->session->set_flashdata('success_message', 'Data calon telah berhasil disimpan.');
    redirect('users/orangtua');
}

    public function upload_akte() {
    $config['upload_path'] = './uploads/Akte Kelahiran/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 2048;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('akte_kelahiran')) {
        $file_data = $this->upload->data();
        // Lakukan sesuatu dengan file PDF yang diunggah
        // Contoh: menyimpan informasi file ke database
        $this->m_register->simpan_siswa($file_data['file_name']);
        echo 'File PDF berhasil diunggah.';
    } else {
        $error = $this->upload->display_errors();
        echo $error;
    }
}

public function upload_ijazah() {
    $config['upload_path'] = './uploads/Ijazah Sekolah/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 2048;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('ijazah_sekolah')) {
        $file_data = $this->upload->data();
        // Lakukan sesuatu dengan file PDF yang diunggah
        // Contoh: menyimpan informasi file ke database
        $this->m_register->simpan_siswa($file_data['file_name']);
        echo 'File PDF berhasil diunggah.';
    } else {
        $error = $this->upload->display_errors();
        echo $error;
    }
}

public function upload_kk() {
    $config['upload_path'] = './uploads/Kartu Keluarga/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 2048;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('kartu_keluarga')) {
        $file_data = $this->upload->data();
        // Lakukan sesuatu dengan file PDF yang diunggah
        // Contoh: menyimpan informasi file ke database
        $this->m_register->simpan_siswa($file_data['file_name']);
        echo 'File PDF berhasil diunggah.';
    } else {
        $error = $this->upload->display_errors();
        echo $error;
    }
}

public function upload_skhun() {
    $config['upload_path'] = './uploads/SKHUN/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 2048;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('skhun')) {
        $file_data = $this->upload->data();
        // Lakukan sesuatu dengan file PDF yang diunggah
        // Contoh: menyimpan informasi file ke database
        $this->m_register->simpan_siswa($file_data['file_name']);
        echo 'File PDF berhasil diunggah.';
    } else {
        $error = $this->upload->display_errors();
        echo $error;
    }
}

public function upload_image() {
    $config['upload_path'] = './uploads/Pas Foto/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 2048;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('pas_foto')) {
        $file_data = $this->upload->data();
        // Lakukan sesuatu dengan file gambar yang diunggah
        // Contoh: menyimpan informasi file ke database
        $this->m_register->simpan_siswa($file_data['file_name']);
        echo 'File gambar berhasil diunggah.';
    } else {
        $error = $this->upload->display_errors();
        echo $error;
    }
}
public function simpan_editProfile () {
    
        // Mengambil data dari form
        $nik_ayah = $this->input->post('nik_ayah');
        $nik_ibu     = $this->input->post('nika_ibu');

        $data = array(
            'nama_calon'    => $nama_calon,
            'nisn'          => $nisn
        );

        $this->m_profile->editProfile($nik_ayah, $data);
        redirect('users/profile');
    }
}

    	
	

