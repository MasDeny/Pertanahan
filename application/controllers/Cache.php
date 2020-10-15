<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cache extends CI_controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status')=="admin") {
            redirect('admin/dashboard');
        }
        $this->load->model('M_cache');
        $this->load->database();
    }

    public function index() {
        $session = $this->session->userdata('status');
        if ($session == '') {
        $this->load->view('admin/login');
    }
    }

    public function login() {
        $this->form_validation->set_rules('username', 'username', 'required|max_length[20]');
        $this->form_validation->set_rules('password', 'password', 'required');

        $session = $this->session->userdata('status');
        if ($session == '') {
        $this->load->view('admin/login');
        }

        if ($this->form_validation->run() == TRUE) {
            $data = array('username' => $this->input->post('username'),
                        'password' => ($this->input->post('password'))
                    );

            $hasil = $this->M_cache->login($data);

            if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Masuk';
                $sess_data['username'] = $sess->username;
                $sess_data['status'] = $sess->status;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('status')=='admin') {
                redirect('admin/dashboard');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            redirect('cache');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        session_destroy();
        redirect('cache');
        }

}