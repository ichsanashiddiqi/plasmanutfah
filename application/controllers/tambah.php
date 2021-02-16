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
    }

    public function abaka()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_abaka.php', $data);
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

    public function jarak_pagar()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_jarak_pagar.php', $data);
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

    public function kapuk()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapuk.php', $data);
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

    public function kenaf()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kenaf.php', $data);
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

    public function tebu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tebu.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tembakau()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_temmbakau.php', $data);
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
}
