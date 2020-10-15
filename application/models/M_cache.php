<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cache extends CI_Model {

    public function login($data) {
        $query = $this->db->get_where('admin', $data);
            return $query;
    }
}
 // berikut adalah sebuah model dari controller karyawan login