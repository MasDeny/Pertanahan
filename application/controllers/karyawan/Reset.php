<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reset extends CI_controller {
    public function __construct() {
            parent::__construct();
            $this->load->model('M_login');
            $this->load->database();
         if ($this->session->userdata('status')=="") {
             redirect('login');
         }
         $this->load->helper('text');
     }
    public function reset_password() {


        $NIP = $this->input->post('nip');
        $data['password'] = $this->input->post('new_password');
            $this->M_login->update_password($data, $NIP);
            $this->session->set_flashdata('notif','<div class="alert alert-primary alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Berhasil!</strong> Data berhasil diperbaharui</div>');
        redirect('karyawan/dashboard');
    }





}