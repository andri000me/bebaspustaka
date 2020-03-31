<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index($error = NULL) {
        $data = array(
            'title' => 'Login Page',
            'error' => $error
        );
        $this->load->view('login', $data);
    }

    public function login() {
        $this->load->model('Auth_model');
        $login = $this->Auth_model->login($this->input->post('username'), sha1($this->input->post('password')));
        if ($login == 1) {
            //          ambil detail data
            $row = $this->Auth_model->data_login($this->input->post('username'), sha1($this->input->post('password')));
            //          daftarkan session
            $data = array(
                'logged' => TRUE,
                'username' => $row->username,
                'status' => $row->status
            );
            $this->session->set_userdata($data);
            $status = $row->status;

            if ($status === 'Perpustakaan') {
                redirect(site_url('Admin/Verifikasi'));
            }
        } else {
            //            tampilkan pesan error
            $error = 'Username/Password salah';
            $this->index($error);
        }
    }

    function logout() {
        //        destroy session
        $this->session->sess_destroy();
        //        redirect ke halaman login
        redirect(base_url('Auth'));
    }
}