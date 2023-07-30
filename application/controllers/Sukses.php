<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sukses extends CI_Controller {
    public function index() {
    $this->load->view('sukses');
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}