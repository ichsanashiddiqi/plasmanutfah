<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_modal extends CI_Model
{
    public function get_m_agave()
    {
        $this->db->select('*');
        $this->db->order_by('no', 'DESC');
        $query = $this->db->get('dat_agave');
        return $query->result();
    }
    public function get_search_agave($kar_data)
    {
        $this->db->select('*');
        $this->db->where('no_aksesi', $kar_data);
        $res2 = $this->db->get('dat_agave');
        return $res2;
    }
}
