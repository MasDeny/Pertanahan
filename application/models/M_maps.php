<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_maps extends CI_Model {

    public function get_data()
    {
        $this->db->select('*')
        ->from('det_lokasi')
        ->where('titik_koor IS NOT NULL', NULL, FALSE);
        return $this->db->get()->result_array();
    }

}