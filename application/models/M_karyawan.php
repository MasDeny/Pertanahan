<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {
    //fungsi ini untuk menampilkan daftar mahasiswa yang terverifikasi admin yang nantinya
    //akan ditentukan jadwal untuk melakukan sidang

    public function get_data()
    {
        return $this->db->get('pegawai')->result();
    }

    public function add_data($data){
        return $this->db->insert('pegawai', $data);
    }

    public function get_by_nip($nip){
        $this->db->select('*')
        ->from('pegawai')
        ->where('nip', $nip);
        return $this->db->get()->row();
    }

    public function update_data($data, $nip){
        $this->db->where('NIP',$nip);
        $this->db->update('pegawai', $data);
        return TRUE;
    }

    public function delete_data($nip){
        $this->db->where('nip', $nip)
        ->delete('pegawai');
        return TRUE;
    }

    public function get_data_array()
    {
        return $this->db->get('pegawai')->result_array();
    }
}