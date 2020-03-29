<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Model extends CI_Model
{

    public function rules()
    {
        return [
            ['field' => 'nim',
                'label' => 'NIM',
                'rules' => 'required|is_unique[tbl_bp.nim]'],

            ['field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'],

            ['field' => 'prodi',
                'label' => 'Program Studi',
                'rules' => 'required'],

            ['field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'],

            ['field' => 'pengarang',
                'label' => 'Pengarang',
                'rules' => 'required'],

            ['field' => 'tahun',
                'label' => 'Tahun Terbit',
                'rules' => 'required']
        ];
    }

    public function save(){
        $data   = array(
            'nim' => $_POST['nim'],
            'nama' => $_POST['nama'],
            'prodi' => $_POST['prodi'],
            'judul' => $_POST['judul'],
            'pengarang' => $_POST['pengarang'],
            'tahun' => $_POST['tahun']
        );
        $this->db->insert('tbl_bp',$data);
    }

    function get_all_data(){
        $this->db->order_by('id', 'asc');
        return $this->db->get('tbl_bp')->result_array();
    }

}