<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_add_data extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function last_data()
    {
        $this->db->select('*');
        $this->db->from('data_abaka');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }
}
