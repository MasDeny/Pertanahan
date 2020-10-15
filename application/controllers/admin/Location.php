<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_location');
        if ($this->session->userdata('status')=="") {
            redirect('cache');
        }
        $this->load->helper('text');
    }
    public function index() {
        $start = 1;
        $data = array(
            'title' => "Admin Panel System - Daftar Lokasi",
            'heading' => "Daftar Lokasi",
            'lokasi' => $this->M_location->get_data(),
            'user' => $this->session->userdata('username'),
            'no' => $start,
        );
        $this->load->view('admin/content/lokasi/location', $data);
    }

    public function add_location(){
        $data = array(
            'title' => "Admin Panel System - Tambah Lokasi",
            'heading' => "Tambah Lokasi",
            'user' => $this->session->userdata('status'),
        );
        $this->load->view('admin/content/lokasi/add', $data);
    }

    public function save_data(){
        $id_det = $this->input->post('id_det');
        $status = $this->input->post('status');
        $data = array(
                'kecamatan'             => $this->input->post('kecamatan'),
                'kelurahan'             => $this->input->post('kelurahan'),
                'nm_barang'             => $this->input->post('nm_barang'),
                'kode_barang'           => $this->input->post('kode_barang'),
                'register'              => $this->input->post('register'),
                'tahun_pengadaan'       => $this->input->post('tahun_pengadaan'),
                'letak_alamat'          => $this->input->post('letak_alamat'),
                'peruntukan'            => $this->input->post('peruntukan'),
                'sertipikat'            => $this->input->post('sertipikat'),
                'letterC'               => $this->input->post('letter_c'),
                'no_SPPT'               => $this->input->post('sppt'),
                'luas_m2'               => $this->input->post('luas'),
                'penggunaan'            => $this->input->post('penggunaan'),
                'peta_block'            => $this->input->post('peta_block'),
                'nomer_induk_bidang'    => $this->input->post('nomer_induk_bidang'),
                'titik_koor'            => $this->input->post('titik_koor'),
                'kesesuaian_tataruang'  => $this->input->post('kesesuaian_tataruang'),
                'keterangan'            => $this->input->post('keterangan'),
                'temuan'                => $this->input->post('temuan'),
            );
        if ($status == 'update') {
            $this->M_location->update_data($data, $id_det);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade in text-white" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil diperbaharui</div>');
        } else {
            $this->M_location->add_data($data);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade in text-white" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil ditambahkan</div>');
        }
        redirect('admin/location');
    }

    public function edit_location($id){
        $data = $this->M_location->get_by_id($id);
        echo json_encode($data);
    }

    public function update_location(){

    }

    public function delete_location(){
        $id = $this->input->post('id');
        $this->M_location->delete_data($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade in text-white" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil dihapus</div>');
        redirect('admin/location');
    }
}