<?php

class M_view_tabel extends CI_Model
{
    function v_tabel_kapas()
    {
        $this->db->select('*');
        $this->db->join('dat_kapas', 'foto_kapas.no_aksesi = dat_kapas.no_aksesi', 'right');
        $this->db->from('foto_kapas');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_abaka()
    {
        $this->db->select('*');
        $this->db->join('dat_abaka', 'foto_abaka.No_aksesi = dat_abaka.no_aksesi', 'right');
        $this->db->from('foto_abaka');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_bungamatahari()
    {
        $this->db->select('*');
        $this->db->join('dat_bunga_matahari', 'foto_bunga_matahari.no_aksesi = dat_bunga_matahari.no_aksesi', 'right');
        $this->db->from('foto_bunga_matahari');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_jarakpagar()
    {
        $this->db->select('*');
        $this->db->join('dat_jarak_pagar', 'foto_jarak_pagar.No_aksesi = dat_jarak_pagar.no_aksesi', 'right');
        $this->db->from('foto_jarak_pagar');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kapuk()
    {
        $this->db->select('*');
        $this->db->join('dat_kapuk', 'foto_kapuk.No_aksesi = dat_kapuk.no_aksesi', 'right');
        $this->db->from('foto_kapuk');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kemiri()
    {
        $this->db->select('*');
        $this->db->join('dat_kemiri', 'foto_kemiri.No_aksesi = dat_kemiri.no_aksesi', 'right');
        $this->db->from('foto_kemiri');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kenaf()
    {
        $this->db->select('*');
        $this->db->join('dat_kenaf', 'foto_kenaf.No_aksesi = dat_kenaf.no_aksesi', 'right');
        $this->db->from('foto_kenaf');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_rami()
    {
        $this->db->select('*');
        $this->db->join('dat_rami', 'foto_rami.No_aksesi = dat_rami.no_aksesi', 'right');
        $this->db->from('foto_rami');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_tebu()
    {
        $this->db->select('*');
        $this->db->join('dat_tebu', 'foto_tebu.No_aksesi = dat_tebu.no_aksesi', 'right');
        $this->db->from('foto_tebu');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_tembakau()
    {
        $this->db->select('*');
        $this->db->join('dat_tembakau', 'foto_tembakau.No_aksesi = dat_tembakau.no_aksesi', 'right');
        $this->db->from('foto_tembakau');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_wijen()
    {
        $this->db->select('*');
        $this->db->join('dat_wijen', 'foto_wijen.No_aksesi = dat_wijen.no_aksesi', 'right');
        $this->db->from('foto_wijen');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }
}
