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
        $this->db->where('dat_agave.no_aksesi', $kar_data);
        $this->db->join('dat_agave', 'foto_agave.no_aksesi = dat_agave.no_aksesi', 'right');
        $this->db->from('foto_agave');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_abaka($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_abaka.no_aksesi', $kar_data);
        $this->db->join('dat_abaka', 'foto_abaka.no_aksesi = dat_abaka.no_aksesi', 'right');
        $this->db->from('foto_abaka');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_bm($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_bunga_matahari.no_aksesi', $kar_data);
        $this->db->join('dat_bunga_matahari', 'foto_bunga_matahari.no_aksesi = dat_bunga_matahari.no_aksesi', 'right');
        $this->db->from('foto_bunga_matahari');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_gulabit($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_gulabit.no_aksesi', $kar_data);
        $this->db->join('dat_gulabit', 'foto_gulabit.no_aksesi = dat_gulabit.no_aksesi', 'right');
        $this->db->from('foto_gulabit');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_jarak_kepyar($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_jarak_kepyar.no_aksesi', $kar_data);
        $this->db->join('dat_jarak_kepyar', 'foto_jarak_kepyar.no_aksesi = dat_jarak_kepyar.no_aksesi', 'right');
        $this->db->from('foto_jarak_kepyar');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_jarak_pagar($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_jarak_pagar.no_aksesi', $kar_data);
        $this->db->join('dat_jarak_pagar', 'foto_jarak_pagar.no_aksesi = dat_jarak_pagar.no_aksesi', 'right');
        $this->db->from('foto_jarak_pagar');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_kapas($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_kapas.no_aksesi', $kar_data);
        $this->db->join('dat_kapas', 'foto_kapas.no_aksesi = dat_kapas.no_aksesi', 'right');
        $this->db->from('foto_kapas');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_kapuk($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_kapuk.no_aksesi', $kar_data);
        $this->db->join('dat_kapuk', 'foto_kapuk.no_aksesi = dat_kapuk.no_aksesi', 'right');
        $this->db->from('foto_kapuk');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_kemiri($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_kemiri.no_aksesi', $kar_data);
        $this->db->join('dat_kemiri', 'foto_kemiri.no_aksesi = dat_kemiri.no_aksesi', 'right');
        $this->db->from('foto_kemiri');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_kenaf($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_kenaf.no_aksesi', $kar_data);
        $this->db->join('dat_kenaf', 'foto_kenaf.no_aksesi = dat_kenaf.no_aksesi', 'right');
        $this->db->from('foto_kenaf');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_rami($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_rami.no_aksesi', $kar_data);
        $this->db->join('dat_rami', 'foto_rami.no_aksesi = dat_rami.no_aksesi', 'right');
        $this->db->from('foto_rami');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_rosela($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_rosela.no_aksesi', $kar_data);
        $this->db->join('dat_rosela', 'foto_rosela.no_aksesi = dat_rosela.no_aksesi', 'right');
        $this->db->from('foto_rosela');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_stevia($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_stevia.no_aksesi', $kar_data);
        $this->db->join('dat_stevia', 'foto_stevia.no_aksesi = dat_stevia.no_aksesi', 'right');
        $this->db->from('foto_stevia');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_tebu($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_tebu.no_aksesi', $kar_data);
        $this->db->join('dat_tebu', 'foto_tebu.no_aksesi = dat_tebu.no_aksesi', 'right');
        $this->db->from('foto_tebu');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_tembakau($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_tembakau.no_aksesi', $kar_data);
        $this->db->join('dat_tembakau', 'foto_tembakau.no_aksesi = dat_tembakau.no_aksesi', 'right');
        $this->db->from('foto_tembakau');
        $res2 = $this->db->get();
        return $res2;
    }

    public function get_search_wijen($kar_data)
    {
        $this->db->select('*');
        $this->db->where('dat_wijen.no_aksesi', $kar_data);
        $this->db->join('dat_wijen', 'foto_wijen.no_aksesi = dat_wijen.no_aksesi', 'right');
        $this->db->from('foto_wijen');
        $res2 = $this->db->get();
        return $res2;
    }
}
