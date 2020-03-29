<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fib extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model');
    }

    public function index() {
        //tampilkan halaman
        $data['_view'] = 'index';
        $this->load->view('layout/main', $data);
    }

    public function Daftar(){
        //tampilkan halaman
        $data['_view'] = 'daftar';
        $this->load->view('layout/main', $data);
    }

    function Save(){
        //setting validasi data
        $rules      = $this->Model->rules();
        $validation = $this->form_validation->set_rules($rules);
//
        if ($validation->run()) {
            $this->Model->save();
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('Fib/Daftar');
        }
//
        //tampilkan halaman
        $data['_view'] = 'daftar';
        $this->load->view('layout/main', $data);
    }

    public function Cetak(){
        //tampilkan halaman
        $data['_view'] = 'mhs/index';
        $this->load->view('layout/main', $data);
    }

    function Cari(){
        $cari = $_POST['nim'];
        $query = $this->db->get_where('tbl_bp',array('nim'=>$cari))->result_array();
        foreach ($query as $q){
            $v = $q['v'];
        }
        if (!empty($query)){
            if ($v == 1){
                $data['data'] = $query;
                $this->load->view('mhs/cetak', $data);
            }else{
                $this->session->set_flashdata('info', 'data belum diverifikasi oleh admin. Anda harus menunggu konfirmasi dari admin, silakan cek secara berkala halaman ini.');
                redirect('Fib/Cetak');
            }
        }else{
            $this->session->set_flashdata('info', 'data tidak ditemukan');
            redirect('Fib/Cetak');
        }
    }
}