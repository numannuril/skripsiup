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
}