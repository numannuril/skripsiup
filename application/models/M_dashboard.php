<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function cek_user($data) {
		$query = $this->db->get_where('calon_siswa', $data);
		return $query;
	}

    public function cek_admin($data) {
		$query = $this->db->get_where('admin', $data);
		return $query;
	}

    public function get_member_by_username($username){
        return $this->db->get_where('calon_siswa', array('username' => $username))->row();
    }
    
    public function get_member_by_id($id){
        return $this->db->get_where('calon_siswa', array('id_calon' => $id))->row();
    }
    
}