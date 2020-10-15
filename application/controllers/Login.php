<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->database();
    }

    public function index() {
        $session = $this->session->userdata('status');
        if ($session == '') {
        $this->load->view('karyawan/login_karyawan');
    }elseif ($session == 'Login') {
        redirect('karyawan/dashboard');
    }
    }

    public function login() {
        $this->form_validation->set_rules('NIP', 'NIP', 'required|max_length[20]');
        $this->form_validation->set_rules('password', 'password', 'required');

        $session = $this->session->userdata('status');
        if ($session == '') {
        $this->load->view('karyawan/login_karyawan');
        }

        if ($this->form_validation->run() == TRUE) {
            $data = array('NIP' => $this->input->post('NIP'),
                        'password' => ($this->input->post('password'))
                    );

            $hasil = $this->M_login->login($data);

            if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Masuk';
                $sess_data['username'] = $sess->nama;
                $sess_data['NIP'] = $sess->NIP;
                $sess_data['foto'] = $sess->foto;
                $sess_data['status'] = 'Login';
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('status')=='Login') {
                redirect('karyawan/dashboard');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            redirect('login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('NIP');
        $this->session->unset_userdata('foto');
        session_destroy();
        redirect('login');
        }

}