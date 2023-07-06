<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alur extends CI_Model {

    // Detail berita
    public function simpan_alur($data) {
        //insert data
        return $this->db->insert("website", $data);
    }

    public function get_alur() {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('website');
        $this->db->order_by('id_website', 'DESC');
        return $this->db->get();
        
    }

    public function hapus_alur($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}