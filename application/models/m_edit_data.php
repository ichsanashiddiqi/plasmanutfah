<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_edit_data extends CI_Model
{
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    public function v_nama_tabel()
    {
        $this->db->list_fields('abaka');
    }
}
