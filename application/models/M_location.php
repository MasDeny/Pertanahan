<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_location extends CI_Model {

    public function get_data()
    {
        return $this->db->get('det_lokasi')->result();
    }

    public function add_data($data){
         return $this->db->insert('det_lokasi', $data);
    }

    public function get_by_id($id){
         $this->db->select('*')
        ->from('det_lokasi')
        ->where('id_det', $id);
        return $this->db->get()->row();
    }

    public function update_data($data, $id_det){
        $this->db->where('id_det',$id_det);
        $this->db->update('det_lokasi', $data);
        return TRUE;
    }

    public function delete_data($id){
        $this->db->where('id_det', $id)
        ->delete('det_lokasi');
        return TRUE;
    }
}