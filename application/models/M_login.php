<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function cek_user($username, $password) {
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $query = $this->db->get_where('calon_siswa', $data);
        return $query;
    }

    public function cek_admin($username, $password) {
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $query = $this->db->get_where('admin', $data);
        return $query;
    }
}
