<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_tables extends CI_Model {

    public function get_siswa() {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('calon_siswa');
        $this->db->order_by('id_calon', 'DESC');
        return $this->db->get();
        
    }

    public function get_admin() {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->order_by('id_admin', 'DESC');
        return $this->db->get();
        
    }
    
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}