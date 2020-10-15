<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_controller {
    public function __construct() {
            parent::__construct();
            $this->load->model('M_dashboard');
         if ($this->session->userdata('status')=="") {
             redirect('cache');
         }
         $this->load->helper('text');
     }
    public function index() {
        $data = array(
            'title' => "Admin Panel System - Dashboard",
            'heading' => "Dashboard",
            'user' => $this->session->userdata('username'),
            'jml_karyawan' => $this->M_dashboard->jumlah_karyawan(),
            'karyawan_laki' => $this->M_dashboard->karyawan_laki(),
            'karyawan_perempuan' => $this->M_dashboard->karyawan_perempuan(),
            'karyawan_tetap' => $this->M_dashboard->karyawan_tetap(),
            'karyawan_kontrak' => $this->M_dashboard->karyawan_kontrak(),
            'jml_lokasi' => $this->M_dashboard->jumlah_lokasi(),
            'kepanjen' => $this->M_dashboard->lokasi_kepanjen(),
            'dampit' => $this->M_dashboard->lokasi_dampit(),
            'turen' => $this->M_dashboard->lokasi_turen(),
        );
        $this->load->view('admin/content/index', $data);
    }
}