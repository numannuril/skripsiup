<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_register extends CI_Model {

    public function get_jenis_kelamin() {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('jenis_kelamin');
        return $this->db->get();
    }

    public function get_pilihan() {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('pilihan');
        return $this->db->get();
    }

    public function simpan_siswa($data) {
        //insert data
        return $this->db->insert("calon_siswa", $data);
    }

    public function check_username($nisn) {
        $this->db->select('*');
        $this->db->from('calon_siswa');
        $this->db->where('nisn', $nisn);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            // NISN sudah terdaftar, tampilkan pesan error
            return "NISN sudah terdaftar.";
        } else {
            // NISN belum terdaftar, masukkan NISN ke dalam database
            // Tampilkan pesan berhasil disimpan atau lakukan tindakan lain sesuai kebutuhan
            return simpan_siswa;
        }
    }

    public function simpan_admin($data) {
        //insert data
        return $this->db->insert("admin", $data);
    }
}