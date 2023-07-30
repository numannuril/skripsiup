<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model
{
		
		public function get_siswa($username) {
			// Mengambil data pengguna berdasarkan username
			$query = $this->db->get_where('calon_siswa', array('username' => $username));
			return $query->row();
		}

		public function get_pekerjaan() {
			//select semua data siswa
			$this->db->select('*');
			$this->db->from('pekerjaan');
			return $this->db->get();
		}

		public function simpan_ayah($data_ayah) {
			// Insert data ke tabel "calon_siswa"
			$this->db->insert('ayah', $data_ayah);
	
			// Mengembalikan ID calon siswa yang baru ditambahkan
			// return $this->db->insert_id();
		}
		public function simpan_ibu($data_ibu) {
			// Insert data ke tabel "calon_siswa"
			$this->db->insert('ibu', $data_ibu);
	
			// Mengembalikan ID calon siswa yang baru ditambahkan
			// return $this->db->insert_id();
		}

		public function get_ayah() {
			//select semua data siswa
			$this->db->select('*');
			$this->db->from('ayah');
			return $this->db->get();
		}
	
		public function get_ibu() {
			//select semua data siswa
			$this->db->select('*');
			$this->db->from('ibu');
			return $this->db->get();
		}

		// public function get_siswa() {
		// 	//select semua data siswa
		// 	$this->db->select('*');
		// 	$this->db->from('calon_siswa');
		// 	$this->db->order_by('id_calon', 'DESC');
		// 	return $this->db->get();
			
		// }
		public function get_calon($id_calon) {
			// Mengambil data pengguna berdasarkan username
			$query = $this->db->get_where('calon_siswa', array('id_calon' => $id_calon));
			return $query->row();
		}
		public function edit_calon($id_calon, $data) {
			// Mengupdate profil pengguna berdasarkan username
			$this->db->where('id_calon', $id_calon);
			$this->db->update('calon_siswa', $data);
		}
		public function edit_profile($id_calon, $data) {
			// Mengupdate profil pengguna berdasarkan username
			$this->db->where('id_calon', $id_calon);
			$this->db->update('calon_siswa', $data);
		}
		
		public function update_user($username, $data) {
			// Mengupdate profil pengguna berdasarkan username
			$this->db->where('username', $username);
			$this->db->update('calon_siswa', $data);
		}

		public function get_ayah_by_nik($nik_ayah) {
			// Misalnya, jika tabel Ayah bernama "tbl_ayah"
			// Dan kolom "nama_ayah", "nik_ayah", "email_ayah", "alamat_ayah", "pekerjaan_ayah_id_pekerjaan"
			$query = $this->db->get_where('ayah', array('nik_ayah' => $nik_ayah));
			return $query->row_array();
		}
	
		public function get_ibu_by_nik($nik_ibu) {
			// Misalnya, jika tabel Ibu bernama "tbl_ibu"
			// Dan kolom "nama_ibu", "nik_ibu", "email_ibu", "alamat_ibu", "pekerjaan_ibu_id_pekerjaan"
			$query = $this->db->get_where('ibu', array('nik_ibu' => $nik_ibu));
			return $query->row_array();
		}
		// public function simpan_($data) {
		// 	// Insert data ke tabel "calon_siswa"
		// 	$this->db->insert('calon_siswa', $data);
		// }
	
	
}