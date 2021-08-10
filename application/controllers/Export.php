<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Export extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_edit_data');
        $this->load->helper('url');
    }

    function kapas()
    {
        $data['data'] = $this->db->get('dat_kapas')->result();
        $data['tabel'] = $this->db->get('tab_kapas')->result();
        $this->load->view('export/kapas.php', $data);
    }

    function abaka()
    {
        $data['data'] = $this->db->get('dat_abaka')->result();
        $data['tabel'] = $this->db->get('tab_abaka')->result();
        $this->load->view('export/abaka.php', $data);
    }

    function agave()
    {
        $data['data'] = $this->db->get('dat_agave')->result();
        $data['tabel'] = $this->db->get('tab_agave')->result();
        $this->load->view('export/agave.php', $data);
    }

    function bunga_matahari()
    {
        $data['data'] = $this->db->get('dat_bunga_matahari')->result();
        $data['tabel'] = $this->db->get('tab_bm')->result();
        $this->load->view('export/bunga_matahari.php', $data);
    }

    function gulabit()
    {
        $data['data'] = $this->db->get('dat_gulabit')->result();
        $data['tabel'] = $this->db->get('tab_gulabit')->result();
        $this->load->view('export/gulabit.php', $data);
    }

    function jarak_kepyar()
    {
        $data['data'] = $this->db->get('dat_jarak_kepyar')->result();
        $data['tabel'] = $this->db->get('tab_jarak_kepyar')->result();
        $this->load->view('export/jarak_kepyar.php', $data);
    }

    function jarak_pagar()
    {
        $data['data'] = $this->db->get('dat_jarak_pagar')->result();
        $data['tabel'] = $this->db->get('tab_jarak_pagar')->result();
        $this->load->view('export/jarak_pagar.php', $data);
    }

    function kapuk()
    {
        $data['data'] = $this->db->get('dat_kapuk')->result();
        $data['tabel'] = $this->db->get('tab_kapuk')->result();
        $this->load->view('export/kapuk.php', $data);
    }

    function kemiri()
    {
        $data['data'] = $this->db->get('dat_kemiri')->result();
        $data['tabel'] = $this->db->get('tab_kemiri')->result();
        $this->load->view('export/kemiri.php', $data);
    }

    function kenaf()
    {
        $data['data'] = $this->db->get('dat_kenaf')->result();
        $data['tabel'] = $this->db->get('tab_kenaf')->result();
        $this->load->view('export/kenaf.php', $data);
    }

    function rami()
    {
        $data['data'] = $this->db->get('dat_rami')->result();
        $data['tabel'] = $this->db->get('tab_rami')->result();
        $this->load->view('export/kapas.php', $data);
    }

    function rosela()
    {
        $data['data'] = $this->db->get('dat_rosela')->result();
        $data['tabel'] = $this->db->get('tab_rosela')->result();
        $this->load->view('export/rosela.php', $data);
    }

    function stevia()
    {
        $data['data'] = $this->db->get('dat_stevia')->result();
        $data['tabel'] = $this->db->get('tab_stevia')->result();
        $this->load->view('export/stevia.php', $data);
    }

    function tebu()
    {
        $data['data'] = $this->db->get('dat_tebu')->result();
        $data['tabel'] = $this->db->get('tab_tebu')->result();
        $this->load->view('export/tebu.php', $data);
    }

    function tembakau()
    {
        $data['data'] = $this->db->get('dat_tembakau')->result();
        $data['tabel'] = $this->db->get('tab_tembakau')->result();
        $this->load->view('export/tembakau.php', $data);
    }

    function wijen()
    {
        $data['data'] = $this->db->get('dat_wijen')->result();
        $data['tabel'] = $this->db->get('tab_wijen')->result();
        $this->load->view('export/wijen.php', $data);
    }
}
