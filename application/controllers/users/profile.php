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
        if($this->session->userdata('level') != "users"){
			redirect(base_url("login"));
		}
        // Mendapatkan username pengguna dari sesi
        $username = $this->session->userdata('username');
        
        // Mengambil data pengguna dari model
        $data['calon_siswa'] = $this->m_profile->get_siswa($username);
        
        // Menampilkan halaman profil dengan data pengguna
        $this->load->view('users/profile', $data);
    }
    
    // public function edit() {
    //     // Memeriksa apakah pengguna sudah login atau belum
    //     // if (!$this->session->userdata('logged_in')) {
    //     //     redirect('login');
    //     // }
        
    //     // Mendapatkan username pengguna dari sesi
    //     $username = $this->session->userdata('username');
        
    //     // Mengambil data pengguna dari model
    //     $data['user'] = $this->m_profile->get_user($username);
        
    //     // Menampilkan halaman edit profil dengan data pengguna
    //     $this->load->view('users/edit_profile', $data);
    // }
    
    // public function update() {
    //     // Memeriksa apakah pengguna sudah login atau belum
    //     // if (!$this->session->userdata('logged_in')) {
    //     //     redirect('login');
    //     // }
        
    //     // Mendapatkan username pengguna dari sesi
    //     $username = $this->session->userdata('username');
        
    //     // Mengambil data yang diinputkan dari form
    //     $data = array(
    //         'name' => $this->input->post('name'),
    //         'email' => $this->input->post('email'),
    //         // tambahkan kolom profil lainnya
    //     );
        
    //     // Mengupdate profil pengguna dengan data yang baru
    //     $this->m_profile->update_user($username, $data);
        
    //     // Mengalihkan pengguna ke halaman profil setelah berhasil mengupdate
    //     redirect('users/profile');
    // }
}
