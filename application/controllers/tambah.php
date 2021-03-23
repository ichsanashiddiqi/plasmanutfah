<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_add_data');
    }

    public function abaka()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['last_data'] = $this->m_add_data->last_data()->result();

        // $data['no_aksesi'] = $this->m_add_data->last_data()->result();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_abaka.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function abaka2()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_abaka();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_abaka2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function bunga_matahari()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_bunga_matahari.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function bunga_matahari2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_bm();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_bunga_matahari2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function jarak_pagar()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_jarak_pagar.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function jarak_pagar2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_jarak_pagar2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kapas()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapas.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kapas2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_abaka();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapas2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kapuk()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapuk.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kapuk2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapuk2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kemiri()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kemiri.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kemiri2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kemiri2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kenaf()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kenaf.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kenaf2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kenaf2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function rami()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_rami.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function rami2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_rami2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tebu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tebu.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tebu2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tebu2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tembakau()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tembakau.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tembakau2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_temmbakau2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function wijen()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_wijen.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function wijen2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_wijen2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }
}
