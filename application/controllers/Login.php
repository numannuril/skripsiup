<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
        $cek_calon = $this->m_login->cek_user($username, $password);
        $cek_admin = $this->m_login->cek_admin($username, $password);

        $row1 = $cek_calon->row_array();
        $row2 = $cek_admin->row_array();

        $total_calon = $cek_calon->num_rows();
        $total_admin = $cek_admin->num_rows();
        
        if ($total_calon > 0){
            $this->session->set_userdata(array(
                'id_calon'=>$row1['nama_calon'],
                'nisn'=>$row1['nisn'],
                'tempat_lahir'=>$row1['tempat_lahir'],
                'tanggal_lahir'=>$row1['tanggal_lahir'],
                'no_hp'=>$row1['no_hp'],
                'asal_sekolah'=>$row1['asal_sekolah'],
                'jenis_kelamin'=>$row1['jenis_kelamin_id_jenis'],
                'pilihan'=>$row1['pilihan_id_pilihan'],


                'level'=>'users'
            )
        );
            redirect('users/dashboard');
        }elseif($total_admin > 0){
            $this->session->set_userdata(array(
                'id_admin'=>$row2['username'],
                'level'=>'admin'
            )
        );
            redirect('admin/dashboard');
 
		}else{
			echo "Username dan password salah !";
		}
        // $username = $this->input->post('username');
        // $password = sha1($this->input->post('password'));

        // $users = $this->Model_login->cek_users($username,$password);
        // $pegawai = $this->Model_login->cek_pegawai($username,$password);

        // $row1 = $users->row_array();
        // $row2 = $pegawai->row_array();

        // $total_users = $users->num_rows();
        // $total_pegawai = $pegawai->num_rows();

        // if ($total_users > 0){
        //     $this->session->set_userdata(array(
        //         'id'=>$row1['username'],
        //         'level'=>'users'
        //     )
        // );
        //     redirect('Administrator/home');
        // }elseif($total_pegawai > 0){
        //     $this->session->set_userdata(array(
        //         'id'=>$row2['id_pegawai'],
        //         'level'=>'pegawai')
        //     );
        //     redirect('Pegawai/home');
        // }else{
        //     echo "<script>window.alert('Maaf, gagal Login');
        //                       window.location=('login')</script>";
        // }

	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}


