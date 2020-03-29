<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model');
        $this->check_session();
    }

    function check_session(){
        if ($this->session->userdata('logged')<>1) {
            redirect(site_url('Auth'));
        }
    }

    public function Verifikasi(){

        $data['data'] = $this->Model->get_all_data();
        //tampilkan halaman
        $data['_view'] = 'adm/index';
        $this->load->view('adm/layout/main', $data);
    }

    function verify($id){
        $this->db->set('v', '1');
        $this->db->where('nim', $id);
        $this->db->update('tbl_bp');
        redirect('Admin/Verifikasi');
    }

    function unverify($id){
        $this->db->set('v', '0');
        $this->db->where('nim', $id);
        $this->db->update('tbl_bp');
        redirect('Admin/Verifikasi');
    }
}