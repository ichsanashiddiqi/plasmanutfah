<?php
class Modal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        $this->load->model("M_edit_data");
        $this->load->model("M_view_tabel");
        $this->load->library('session');
        $this->load->model("m_modal");
    }

    function agave_result()
    {
        $data['idkar'] = $this->db->get('tab_agave')->result_array();
        $this->load->view('modal/v_mdl_agave', $data);
    }

    function abaka_result()
    {
        $data['idkar'] = $this->db->get('tab_abaka')->result_array();
        $this->load->view('modal/v_mdl_abaka', $data);
    }

    function bm_result()
    {
        $data['idkar'] = $this->db->get('tab_bm')->result_array();

        $this->load->view('modal/v_mdl_bm', $data);
    }

    function jarak_kepyar_result()
    {
        $data['idkar'] = $this->db->get('tab_jarak_kepyar')->result_array();

        $this->load->view('modal/v_mdl_jarak_kepyar', $data);
    }

    function jarak_pagar_result()
    {
        $data['idkar'] = $this->db->get('tab_jarak_pagar')->result_array();

        $this->load->view('modal/v_mdl_jarak_pagar', $data);
    }

    function kapas_result()
    {
        $data['idkar'] = $this->db->get('tab_kapas')->result_array();

        $this->load->view('modal/v_mdl_kapas', $data);
    }

    function kapuk_result()
    {
        $data['idkar'] = $this->db->get('tab_kapuk')->result_array();

        $this->load->view('modal/v_mdl_kapuk', $data);
    }

    function kemiri_result()
    {
        $data['idkar'] = $this->db->get('tab_kemiri')->result_array();

        $this->load->view('modal/v_mdl_kemiri', $data);
    }

    function kenaf_result()
    {
        $data['idkar'] = $this->db->get('tab_kenaf')->result_array();

        $this->load->view('modal/v_mdl_kenaf', $data);
    }

    function rami_result()
    {
        $data['idkar'] = $this->db->get('tab_rami')->result_array();

        $this->load->view('modal/v_mdl_rami', $data);
    }

    function rosela_result()
    {

        $data['idkar'] = $this->db->get('tab_rosela')->result_array();

        $this->load->view('modal/v_mdl_rosela', $data);
    }

    function stevia_result()
    {
        $data['idkar'] = $this->db->get('tab_stevia')->result_array();

        $this->load->view('modal/v_mdl_stevia', $data);
    }

    function tebu_result()
    {
        $data['idkar'] = $this->db->get('tab_tebu')->result_array();

        $this->load->view('modal/v_mdl_tebu', $data);
    }

    function tembakau_result()
    {
        $data['idkar'] = $this->db->get('tab_tembakau')->result_array();

        $this->load->view('modal/v_mdl_tembakau', $data);
    }

    function wijen_result()
    {
        $data['idkar'] = $this->db->get('tab_wijen')->result_array();

        $this->load->view('modal/v_mdl_wijen', $data);
    }
}
