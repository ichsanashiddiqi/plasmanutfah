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

    function v_tabel_abaka()
    {
        $this->db->select('dat_abaka.*, foto_abaka.No_aksesi as no_aksesi, foto_abaka.Image');
        $this->db->join('foto_abaka', 'foto_abaka.No_aksesi = dat_abaka.no_aksesi');
        $this->db->from('dat_abaka');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_bungamatahari()
    {
        $this->db->select('dat_bunga_matahari.*, foto_bunga_matahari.no_aksesi as no_aksesi, foto_bunga_matahari.image');
        $this->db->join('foto_bunga_matahari', 'foto_bunga_matahari.no_aksesi = dat_bunga_matahari.no_aksesi');
        $this->db->from('dat_bunga_matahari');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_jarakpagar()
    {
        $this->db->select('dat_jarak_pagar.*, foto_jarak_pagar.No_aksesi as no_aksesi, foto_jarak_pagar.Image');
        $this->db->join('foto_jarak_pagar', 'foto_jarak_pagar.No_aksesi = dat_jarak_pagar.no_aksesi');
        $this->db->from('dat_jarak_pagar');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kapuk()
    {
        $this->db->select('dat_kapuk.*, foto_kapuk.No_aksesi as no_aksesi, foto_kapuk.Image');
        $this->db->join('foto_kapuk', 'foto_kapuk.No_aksesi = dat_kapuk.no_aksesi');
        $this->db->from('dat_kapuk');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kemiri()
    {
        $this->db->select('dat_kemiri.*, foto_kemiri.No_aksesi as no_aksesi, foto_kemiri.Image');
        $this->db->join('foto_kemiri', 'foto_kemiri.No_aksesi = dat_kemiri.no_aksesi');
        $this->db->from('dat_kemiri');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_kenaf()
    {
        $this->db->select('dat_kenaf.*, foto_kenaf.No_aksesi as no_aksesi, foto_kenaf.Image');
        $this->db->join('foto_kenaf', 'foto_kenaf.No_aksesi = dat_kenaf.no_aksesi');
        $this->db->from('dat_kenaf');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_rami()
    {
        $this->db->select('dat_rami.*, foto_rami.No_aksesi as no_aksesi, foto_rami.Image');
        $this->db->join('foto_rami', 'foto_rami.No_aksesi = dat_rami.no_aksesi');
        $this->db->from('dat_rami');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_tebu()
    {
        $this->db->select('dat_tebu.*, foto_tebu.No_aksesi as no_aksesi, foto_tebu.Image');
        $this->db->join('foto_tebu', 'foto_tebu.No_aksesi = dat_tebu.no_aksesi');
        $this->db->from('dat_tebu');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_tembakau()
    {
        $this->db->select('dat_tembakau.*, foto_tembakau.No_aksesi as no_aksesi, foto_tembakau.Image');
        $this->db->join('foto_tembakau', 'foto_tembakau.No_aksesi = dat_tembakau.no_aksesi');
        $this->db->from('dat_tembakau');
        $query = $this->db->get();
        return $query;
    }

    function v_tabel_wijen()
    {
        $this->db->select('dat_wijen.*, foto_wijen.No_aksesi as no_aksesi, foto_wijen.Image');
        $this->db->join('foto_wijen', 'foto_wijen.No_aksesi = dat_wijen.no_aksesi', 'left outer');
        $this->db->from('dat_wijen');
        $query = $this->db->get();
        return $query;
    }
}
