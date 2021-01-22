<?php

class M_view_tabel extends CI_Model
{
    function v_tabel_kapas()
    {
        $this->db->select('dat_kapas.*, foto_kapas.no_aksesi as no_aksesi, foto_kapas.image');
        $this->db->join('foto_kapas', 'foto_kapas.no_aksesi = dat_kapas.no_aksesi');
        $this->db->from('dat_kapas');
        $query = $this->db->get();
        return $query;
    }
}
