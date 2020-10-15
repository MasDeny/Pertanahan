<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function login($data) {
        $query = $this->db->get_where('pegawai', $data);
            return $query;
    }

    public function update_password($data, $NIP){
        $this->db->where('NIP',$NIP);
        $this->db->update('pegawai', $data);
        return TRUE;
    }
}