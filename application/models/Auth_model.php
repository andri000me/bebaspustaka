<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model {
//    untuk mengcek jumlah username dan password yang sesuai
    function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('tbl_user');
        return $query->num_rows();
    }
//    untuk mengambil data hasil login
    function data_login($username,$password) {
        return $this->db->query("SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'")->row();
    }
}
/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */