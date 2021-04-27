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

    function last_data_abaka()
    {
        $this->db->select('*');
        $this->db->from('dat_abaka');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_bm()
    {
        $this->db->select('*');
        $this->db->from('dat_bunga_matahari');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_jp()
    {
        $this->db->select('*');
        $this->db->from('dat_jarak_pagar');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_kapas()
    {
        $this->db->select('*');
        $this->db->from('dat_kapas');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_kapuk()
    {
        $this->db->select('*');
        $this->db->from('dat_kapuk');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_kemiri()
    {
        $this->db->select('*');
        $this->db->from('dat_kemiri');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_kenaf()
    {
        $this->db->select('*');
        $this->db->from('dat_kenaf');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }


    function last_data_rami()
    {
        $this->db->select('*');
        $this->db->from('dat_rami');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_tebu()
    {
        $this->db->select('*');
        $this->db->from('dat_tebu');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_tembakau()
    {
        $this->db->select('*');
        $this->db->from('dat_tembakau');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function last_data_wijen()
    {
        $this->db->select('*');
        $this->db->from('dat_wijen');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    function add_tabel()
    {
        $this->dbforge->add_column();
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
