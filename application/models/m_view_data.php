<?php

class M_view_data extends CI_Model
{
    public function jumlah_abaka()
    {
        $query = $this->db->get('dat_abaka');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function deskriptor_abaka()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'abaca');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function des_abaka()
    {
        $this->db->select('*');
        $this->db->from('deskriptor-bltstab');
        $this->db->where('kmditi', 'abaca');
        $query = $this->db->get();
        return $query;
    }
}
