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

    function get_kapas()
    {
        return $this->db->get('tab_kapas');
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

    function get_abaka()
    {
        return $this->db->get('tab_abaka');
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

    function get_bunga_matahari()
    {
        return $this->db->get('tab_bm');
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

    function get_jarak_pagar()
    {
        return $this->db->get('tab_jarak_pagar');
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

    function get_kapuk()
    {
        return $this->db->get('tab_kapuk');
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

    function get_kemiri()
    {
        return $this->db->get('tab_kemiri');
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

    function get_kenaf()
    {
        return $this->db->get('tab_kenaf');
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

    function get_rami()
    {
        return $this->db->get('tab_rami');
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

    function get_tebu()
    {
        return $this->db->get('tab_tebu');
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

    function get_tembakau()
    {
        return $this->db->get('tab_tembakau');
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

    function get_wijen()
    {
        return $this->db->get('tab_wijen');
    }

    function v_tabel_stevia()
    {
        $this->db->select('*');
        $this->db->join('dat_stevia', 'foto_stevia.No_aksesi = dat_stevia.no_aksesi', 'right');
        $this->db->from('foto_stevia');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function get_stevia()
    {
        return $this->db->get('tab_stevia');
    }


    function v_tabel_gulabit()
    {
        $this->db->select('*');
        $this->db->join('dat_gulabit', 'foto_gulabit.No_aksesi = dat_gulabit.no_aksesi', 'right');
        $this->db->from('foto_gulabit');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function get_gulabit()
    {
        return $this->db->get('tab_gulabit');
    }


    function v_tabel_rosela()
    {
        $this->db->select('*');
        $this->db->join('dat_rosela', 'foto_rosela.No_aksesi = dat_rosela.no_aksesi', 'right');
        $this->db->from('foto_rosela');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function get_rosela()
    {
        return $this->db->get('tab_rosela');
    }


    function v_tabel_agave()
    {
        $this->db->select('*');
        $this->db->join('dat_agave', 'foto_agave.No_aksesi = dat_agave.no_aksesi', 'right');
        $this->db->from('foto_agave');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function get_agave()
    {
        return $this->db->get('tab_agave');
    }


    function v_tabel_jarak_kepyar()
    {
        $this->db->select('*');
        $this->db->join('dat_jarak_kepyar', 'foto_jarak_kepyar.No_aksesi = dat_jarak_kepyar.no_aksesi', 'right');
        $this->db->from('foto_jarak_kepyar');
        $this->db->order_by('no', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function get_jarak_kepyar()
    {
        return $this->db->get('tab_jarak_kepyar');
    }

    function v_tabel_user()
    {

        return $this->db->get('user');
    }

    // BATASS BUAT AMBIL DATA TERAKHIR XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    function jml_abaka()
    {
        $this->db->select('*');
        $this->db->from('dat_abaka');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_bm()
    {
        $this->db->select('*');
        $this->db->from('dat_bunga_matahari');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_jp()
    {
        $this->db->select('*');
        $this->db->from('dat_jarak_pagar');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_kapas()
    {
        $this->db->select('*');
        $this->db->from('dat_kapas');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_kapuk()
    {
        $this->db->select('*');
        $this->db->from('dat_kapuk');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_kemiri()
    {
        $this->db->select('*');
        $this->db->from('dat_kemiri');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_kenaf()
    {
        $this->db->select('*');
        $this->db->from('dat_kenaf');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_rami()
    {
        $this->db->select('*');
        $this->db->from('dat_rami');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_tebu()
    {
        $this->db->select('*');
        $this->db->from('dat_tebu');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_tembakau()
    {
        $this->db->select('*');
        $this->db->from('dat_tembakau');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    function jml_wijen()
    {
        $this->db->select('*');
        $this->db->from('dat_wijen');
        $this->db->order_by('no', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }
}
