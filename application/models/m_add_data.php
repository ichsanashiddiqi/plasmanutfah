<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_add_data extends CI_Model
{

    public $image = "default.jpg";
    public function __construct()
    {
        parent::__construct();
    }

    public function insertGambar($judul)
    {
        $data = array(
            'nama' => $this->input->post('judul'),
            'foto' => $judul
        );

        return $this->db->insert('foto', $data);
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function cek_abaka($where, $table)
    {
        return $this->db->get_where($where, $table)->row_array();
    }

    function last_data()
    {
        $this->db->select('*');
        $this->db->from('dat_abaka');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    // private function _uploadImage()
    // {
    // 	$config['upload_path']          = './upload/product/';
    // 	$config['allowed_types']        = 'gif|jpg|png';
    // 	$config['file_name']            = $this->product_id;
    // 	$config['overwrite']			= true;
    // 	$config['max_size']             = 1024; // 1MB
    // 	// $config['max_width']            = 1024;
    // 	// $config['max_height']           = 768;

    // 	$this->load->library('upload', $config);

    // 	if ($this->upload->do_upload('image')) {
    // 		return $this->upload->data("file_name");
    // 	}

    // 	return "default.jpg";
    // }
}
