<?php

class M_view_tabel extends CI_Model
{
    function v_tabel_kapas()
    {
        $this->db->select('*');
        $this->db->join('foto_kapas', 'foto_kapas.no_aksesi = dat_kapas.no_aksesi', 'left');
        $this->db->from('dat_kapas');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_abaka()
    {
        $this->db->select('*');
        $this->db->join('foto_abaka', 'foto_abaka.No_aksesi = dat_abaka.no_aksesi', 'left');
        $this->db->from('dat_abaka');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_bungamatahari()
    {
        $this->db->select('*');
        $this->db->join('foto_bunga_matahari', 'foto_bunga_matahari.no_aksesi = dat_bunga_matahari.no_aksesi', 'left');
        $this->db->from('dat_bunga_matahari');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_jarakpagar()
    {
        $this->db->select('*');
        $this->db->join('foto_jarak_pagar', 'foto_jarak_pagar.No_aksesi = dat_jarak_pagar.no_aksesi', 'left');
        $this->db->from('dat_jarak_pagar');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kapuk()
    {
        $this->db->select('*');
        $this->db->join('foto_kapuk', 'foto_kapuk.No_aksesi = dat_kapuk.no_aksesi', 'left');
        $this->db->from('dat_kapuk');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kemiri()
    {
        $this->db->select('*');
        $this->db->join('foto_kemiri', 'foto_kemiri.No_aksesi = dat_kemiri.no_aksesi', 'left');
        $this->db->from('dat_kemiri');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kenaf()
    {
        $this->db->select('*');
        $this->db->join('foto_kenaf', 'foto_kenaf.No_aksesi = dat_kenaf.no_aksesi', 'left');
        $this->db->from('dat_kenaf');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_rami()
    {
        $this->db->select('*');
        $this->db->join('foto_rami', 'foto_rami.No_aksesi = dat_rami.no_aksesi', 'left');
        $this->db->from('dat_rami');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_tebu()
    {
        $this->db->select('*');
        $this->db->join('foto_tebu', 'foto_tebu.No_aksesi = dat_tebu.no_aksesi', 'left');
        $this->db->from('dat_tebu');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_tembakau()
    {
        $this->db->select('*');
        $this->db->join('foto_tembakau', 'foto_tembakau.No_aksesi = dat_tembakau.no_aksesi', 'left');
        $this->db->from('dat_tembakau');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_wijen()
    {
        $this->db->select('*');
        $this->db->join('foto_wijen', 'foto_wijen.No_aksesi = dat_wijen.no_aksesi', 'left');
        $this->db->from('dat_wijen');
        $query = $this->db->get();
        return $query;
    }
}
