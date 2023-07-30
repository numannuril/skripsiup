<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {

    function __construct(){
		parent::__construct();
        
		if($this->session->userdata('level') != "admin"){
			redirect(base_url("login"));
		}
    }
	public function index()
    {
        //load model
        $this->load->model('m_tables');

        $data = array(
            'data_admin' => $this->m_tables->get_admin()->result()
        );
        //load view
        $this->load->view('admin/data_admin', $data);
    }
    public function hapus($id)
    {
    
        $this->load->model('m_tables');
    
        $where = array('id_admin' => $id);
        $this->m_tables->hapus_data($where,'admin');
        $this->session->set_flashdata('success_message', 'Data admin telah berhasil dihapus.');
        redirect('admin/data_admin');
    }
    public function edit($id_admin) {
        $this->load->model('m_register');

        // Jika form disubmit, proses perubahan data admin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Ambil data dari form
            $username = $this->input->post('username');
            $password = md5($this->input->post('password')); // Mengubah password menjadi hash MD5
            $email = $this->input->post('email');
            $nama_lengkap = $this->input->post('nama_lengkap');

            // Data yang akan diupdate dalam bentuk array asosiatif
            $data = array(
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'nama_lengkap' => $nama_lengkap
            );

            // Memanggil model untuk melakukan update data admin
            $is_updated = $this->m_register->update_admin($id_admin, $data);

            if ($is_updated) {
                // Jika data admin berhasil diupdate, tampilkan pesan sukses atau lakukan redirect jika diinginkan
                $this->session->set_flashdata('success_message', 'Data admin telah berhasil diedit.');
                redirect('admin/data_admin');
            } else {
                // Jika data admin gagal diupdate, tampilkan pesan error atau ulangi proses edit
                echo "Gagal mengupdate data admin!";
            }
        }

        // Load view modal edit admin dan kirim data admin yang akan diedit
        $data['admin'] = $this->m_register->get_admin($id_admin);
        $this->load->view('admin/data_admin', $data);
    }

    public function simpan() {
        $this->load->model('m_register');
        // Get data dari form
        $nama_lengkap       = $this->input->post('nama_lengkap');
        $username           = $this->input->post('username');
        $email              = $this->input->post('email');
        $password = md5($this->input->post('password'));
        

        $data = array(
            'nama_lengkap'     => $nama_lengkap,
            'username'          => $username,
            'email'            => $email,
            'password'         => $password
        );
        $this->m_register->simpan_admin($data);
        $this->session->set_flashdata('success_message', 'Data admin telah berhasil ditambah.');
        redirect('admin/data_admin');
    }
}
