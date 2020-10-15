<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
    public function jumlah_karyawan(){
        return $this->db->get('pegawai')->num_rows();
    }

    public function karyawan_laki(){
        $this->db->where('jenkel', 'laki-laki');
        return $this->db->get('pegawai')->num_rows();
    }

    public function karyawan_perempuan(){
        $this->db->where('jenkel', 'perempuan');
        return $this->db->get('pegawai')->num_rows();
    }

    public function karyawan_tetap(){
        $this->db->where('status', 'tetap');
        return $this->db->get('pegawai')->num_rows();
    }

    public function karyawan_kontrak(){
        $this->db->where('status', 'kontrak');
        return $this->db->get('pegawai')->num_rows();
    }

    public function jumlah_lokasi(){
        return $this->db->get('det_lokasi')->num_rows();
    }

    public function lokasi_kepanjen(){
        $this->db->where('kecamatan', 'kepanjen');
        return $this->db->get('det_lokasi')->num_rows();
    }

    public function lokasi_dampit(){
        $this->db->where('kecamatan', 'dampit');
        return $this->db->get('det_lokasi')->num_rows();
    }

    public function lokasi_turen(){
        $this->db->where('kecamatan', 'turen');
        return $this->db->get('det_lokasi')->num_rows();
    }
}