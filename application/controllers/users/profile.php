<?php
class Profile extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_profile');
        $this->load->library('session');
    }
    
    public function index() {
        // Memeriksa apakah pengguna sudah login atau belum
        // if (!$this->session->userdata('logged_in')) {
        //     redirect('login');
        // }
        // if($this->session->userdata('level') != "users"){
		// 	redirect(base_url("login"));
		// }
        // Mendapatkan username pengguna dari sesi
        $id_calon = $this->session->userdata('id_calon');
        
        // Mengambil data calon siswa dari model
        $data['calon_siswa'] = $this->m_profile->get_calon($id_calon);
	$this->load->view('users/profile', $data);
}
public function editProfile() {
    // Memeriksa apakah pengguna sudah login atau belum
    // if (!$this->session->userdata('logged_in')) {
    //     redirect('login');
    // }
    // if($this->session->userdata('level') != "users"){
    // 	redirect(base_url("login"));
    // }
    // Mendapatkan username pengguna dari sesi
    $id_calon = $this->session->userdata('id_calon');
    
    // Mengambil data calon siswa dari model
    // $data['calon_siswa'] = ;
    $data = array(
        'ayah'	=> $this->m_profile->get_ayah()->result(),
        'ibu'		=> $this->m_profile->get_ibu()->result(),
        'calon_siswa' => $this->m_profile->get_calon($id_calon)
    );
$this->load->view('users/editProfile', $data);
}
        // Menampilkan halaman profil dengan data pengguna

        public function getAyahData($nik_ayah) {
            // Mengambil data Ayah berdasarkan NIK dari model m_profile
            $ayahData = $this->m_profile->get_ayah_by_nik($nik_ayah);
            echo json_encode($ayahData);
        }
    
        public function getIbuData($nik_ibu) {
            // Mengambil data Ibu berdasarkan NIK dari model m_profile
            $ibuData = $this->m_profile->get_ibu_by_nik($nik_ibu);
            echo json_encode($ibuData);
        }
        public function simpan() {
            $id_calon = $this->input->post('id_calon');
            $ayah     = $this->input->post('ayah_nik_ayah');
            $ibu   = $this->input->post('ibu_nik_ibu');
            $data = array (
               'ayah_nik_ayah'=> $ayah,
                'ibu_nik_ibu'=> $ibu
            );
            $this->m_profile->edit_profile($id_calon, $data);
            $this->session->set_flashdata('success_message', 'Data berkas telah berhasil disimpan.');
    redirect('users/profile');
        }
    }

 
    

