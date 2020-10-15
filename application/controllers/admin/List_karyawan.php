<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_karyawan extends CI_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_karyawan');
        if ($this->session->userdata('status')=="") {
            redirect('cache');
        }
        $this->load->helper(array('text', 'form'));
    }
    public function index() {
        $start = 1;
        $data = array(
            'title' => "Admin Panel System - Daftar Karyawan",
            'heading' => "Daftar Karyawan",
            'karyawan' => $this->M_karyawan->get_data(),
            'user' => $this->session->userdata('username'),
            'no' => $start,
        );
        $this->load->view('admin/content/karyawan/karyawan', $data);
    }

    public function add_karyawan(){
        $data = array(
            'title' => "Admin Panel System - Tambah Karyawan",
            'heading' => "Tambah Karyawan",
            'user' => $this->session->userdata('status'),
        );
        $this->load->view('admin/content/karyawan/add', $data);
    }

    public function save_data(){
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $foto = $this->input->post('foto');
        $config['upload_path']      = './photos/';
        $config['allowed_types']    = 'jpg|png|jpeg'; //type file yang boleh di upload
        $config['file_name']        = $nip.'_'.$nama.'_upload_'.$foto;
        $config['max_size']         = 99999999999999999999999999999999999999;
        $config['max_width']        = 99999999999999999999999999999999999999;
        $config['max_height']       = 99999999999999999999999999999999999999;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('foto')){ //upload file
            $upload_data = $this->upload->data(); //ambil file name yang diupload
            $foto        = $upload_data['file_name']; //set file name ke variable image
            $data = array(
                'NIP'                           => $nip,
                'nama'                          => $nama,
                'jenkel'                        => $this->input->post('jenkel'),
                'alamat'                        => $this->input->post('alamat'),
                'telepon'                       => $this->input->post('telepon'),
                'agama'                         => $this->input->post('agama'),
                'jabatan'                       => $this->input->post('jabatan'),
                'password'                      => $nip,
                'status'                        => $this->input->post('status'),
                'foto'                          => $foto
            );
            $this->M_karyawan->add_data($data);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade in text-white" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil ditambahkan</div>');
            redirect('admin/list_karyawan');
        }
    }

    public function edit_karyawan($nip){
        $data = $this->M_karyawan->get_by_nip($nip);
        echo json_encode($data);
    }

    public function update_karyawan(){
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $foto = $this->input->post('foto');
        $foto_lama = $this->input->post('foto_lama');
        if(empty($foto_lama)){
            $data = array(
                'NIP'                           => $nip,
                'nama'                          => $nama,
                'jenkel'                        => $this->input->post('jenkel'),
                'alamat'                        => $this->input->post('alamat'),
                'telepon'                       => $this->input->post('telepon'),
                'agama'                         => $this->input->post('agama'),
                'jabatan'                       => $this->input->post('jabatan'),
                'password'                      => $this->input->post('password'),
                'status'                        => $this->input->post('status'),
            );
            $this->M_karyawan->update_data($data, $nip);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade in text-white" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil di ubah</div>');
            redirect('admin/list_karyawan');
        }else{
        $config['upload_path']      = './photos/';
        $config['allowed_types']    = 'jpg|png|jpeg'; //type file yang boleh di upload
        $config['file_name']        = $nip.'_'.$nama.'_upload_'.date();
        $config['max_size']         = 99999999999999999999999999999999999999;
        $config['max_width']        = 99999999999999999999999999999999999999;
        $config['max_height']       = 99999999999999999999999999999999999999;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('foto')){ //upload file
            unlink('photos/'.$foto_lama);
            $upload_data = $this->upload->data(); //ambil file name yang diupload
            $foto        = $upload_data['file_name']; //set file name ke variable image
            $data = array(
                'NIP'                           => $nip,
                'nama'                          => $nama,
                'jenkel'                        => $this->input->post('jenkel'),
                'alamat'                        => $this->input->post('alamat'),
                'telepon'                       => $this->input->post('telepon'),
                'agama'                         => $this->input->post('agama'),
                'jabatan'                       => $this->input->post('jabatan'),
                'password'                      => $this->input->post('password'),
                'status'                        => $this->input->post('status'),
                'foto'                          => $foto
            );
            $this->M_karyawan->update_data($data, $nip);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade in text-white" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil di ubah</div>');
            redirect('admin/list_karyawan');
            }else {
                echo 'gagal memasukkan data';
            }
        }
}

    public function delete_karyawan(){
        $nip = $this->input->post('nip');
        $foto_lama = $this->input->post('foto');
         unlink('photos/'.$foto_lama);
        $this->M_karyawan->delete_data($nip);
        $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible fade in text-white" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil dihapus</div>');
        redirect('admin/list_karyawan');
    }
}