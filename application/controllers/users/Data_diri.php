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
    redirect('users/data_diri');
}

	// function update(){
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$pekerjaan = $this->input->post('pekerjaan');
	 
	// 	$data = array(
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'pekerjaan' => $pekerjaan
	// 	);
	 
	// 	$where = array(
	// 		'id' => $id
	// 	);
	 
	// 	$this->m_data->update_data($where,$data,'user')
		
	
}
	

