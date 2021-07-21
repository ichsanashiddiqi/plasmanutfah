<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') == null) {
            redirect("auth");
        }
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_add_data');
        $this->load->model('m_view_idkar');
    }

    public function abaka()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['last_data'] = $this->m_add_data->last_data()->result();
        $data['idkar'] = $this->db->get('tab_abaka')->result_array();
        $data['tabel'] = $this->db->get('tab_abaka')->result();
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
        $data['idkar'] = $this->db->get('tab_bm')->result_array();
        $data['tabel'] = $this->db->get('tab_bm')->result();

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
        $data['idkar'] = $this->db->get('tab_jarak_pagar')->result_array();
        $data['tabel'] = $this->db->get('tab_jarak_pagar')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_jarak_pagar.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function jarak_pagar2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_jp();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_jarak_pagar2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kapas()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_kapas')->result_array();
        $data['tabel'] = $this->db->get('tab_kapas')->result();

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
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil Ditambahkan</div>');

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapas2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kapuk()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_kapuk')->result_array();
        $data['tabel'] = $this->db->get('tab_kapuk')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapuk.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kapuk2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_kapuk();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kapuk2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kemiri()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_kemiri')->result_array();
        $data['tabel'] = $this->db->get('tab_kemiri')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kemiri.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kemiri2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_kemiri();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kemiri2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kenaf()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_kenaf')->result_array();
        $data['tabel'] = $this->db->get('tab_kenaf')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kenaf.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function kenaf2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_kenaf();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_kenaf2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function rami()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_rami')->result_array();
        $data['tabel'] = $this->db->get('tab_rami')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_rami.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function rami2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_rami();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_rami2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tebu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_tebu')->result_array();
        $data['tabel'] = $this->db->get('tab_tebu')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tebu.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tebu2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_tebu();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tebu2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tembakau()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_tembakau')->result_array();
        $data['tabel'] = $this->db->get('tab_tembakau')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tembakau.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tembakau2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_tembakau();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_tembakau2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function wijen()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_wijen')->result_array();
        $data['tabel'] = $this->db->get('tab_wijen')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_wijen.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function wijen2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_wijen();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_wijen2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function stevia()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_stevia')->result_array();
        $data['tabel'] = $this->db->get('tab_stevia')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_stevia.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function stevia2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_stevia();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_stevia2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function gulabit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_gulabit')->result_array();
        $data['tabel'] = $this->db->get('tab_gulabit')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_gulabit.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function gulabit2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_gulabit();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_gulabit2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function rosela()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_rosela')->result_array();
        $data['tabel'] = $this->db->get('tab_rosela')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_rosela.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function rosela2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_rosela();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_rosela2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function agave()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_agave')->result_array();
        $data['tabel'] = $this->db->get('tab_agave')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_agave.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function agave2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_agave();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_agave2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function jarak_kepyar()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idkar'] = $this->db->get('tab_jarak_kepyar')->result_array();
        $data['tabel'] = $this->db->get('tab_jarak_kepyar')->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_jarak_kepyar.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function jarak_kepyar2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aksesi'] = $this->m_add_data->last_data_jarak_kepyar();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('tambah/tambah_jarak_kepyar2.php', $data);
        $this->load->view('templates/footer.php', $data);
    }
}
