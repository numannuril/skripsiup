<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model
{
		
		public function get_siswa($username) {
			// Mengambil data pengguna berdasarkan username
			$query = $this->db->get_where('calon_siswa', array('username' => $username));
			return $query->row();
		}

		// public function get_siswa() {
		// 	//select semua data siswa
		// 	$this->db->select('*');
		// 	$this->db->from('calon_siswa');
		// 	$this->db->order_by('id_calon', 'DESC');
		// 	return $this->db->get();
			
		// }
		
		public function update_user($username, $data) {
			// Mengupdate profil pengguna berdasarkan username
			$this->db->where('username', $username);
			$this->db->update('calon_siswa', $data);
		}
	
}