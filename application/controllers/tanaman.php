<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanaman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('email') == null) {
			redirect("auth");
		}
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('m_view_tabel');
		$this->load->model('m_edit_data');
		$this->load->library('session');
		$this->load->model('m_view_idkar');
	}
	public function abaka()
	{

		$data['dat_abaka'] = $this->m_view_tabel->v_tabel_abaka()->result();
		$data['tabel'] = $this->m_view_tabel->get_abaka()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/abaka.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kapas()
	{
		$data['dat_kapas'] = $this->m_view_tabel->v_tabel_kapas()->result();
		$data['tabel'] = $this->m_view_tabel->get_kapas()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kapas.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function bunga_matahari()
	{
		$data['dat_bunga_matahari'] = $this->m_view_tabel->v_tabel_bungamatahari()->result();
		$data['tabel'] = $this->m_view_tabel->get_bunga_matahari()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/bunga_matahari.php', $data);
		$this->load->view('templates/footer.php', $data);
	}


	public function jarak_pagar()
	{
		$data['dat_jarak_pagar'] = $this->m_view_tabel->v_tabel_jarakpagar()->result();
		$data['tabel'] = $this->m_view_tabel->get_jarak_pagar()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/jarak_pagar.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kapuk()
	{
		$data['dat_kapuk'] = $this->m_view_tabel->v_tabel_kapuk()->result();
		$data['tabel'] = $this->m_view_tabel->get_kapuk()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kapuk.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kemiri()
	{
		$data['dat_kemiri'] = $this->m_view_tabel->v_tabel_kemiri()->result();
		$data['tabel'] = $this->m_view_tabel->get_kemiri()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kemirir.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kenaf()
	{
		$data['dat_kenaf'] = $this->m_view_tabel->v_tabel_kenaf()->result();
		$data['tabel'] = $this->m_view_tabel->get_kenaf()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kenaf.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function rami()
	{
		$data['dat_rami'] = $this->m_view_tabel->v_tabel_rami()->result();
		$data['tabel'] = $this->m_view_tabel->get_rami()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/rami.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function tebu()
	{
		$data['dat_tebu'] = $this->m_view_tabel->v_tabel_tebu()->result();
		$data['tabel'] = $this->m_view_tabel->get_tebu()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/tebu.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function tembakau()
	{
		$data['dat_tembakau'] = $this->m_view_tabel->v_tabel_tembakau()->result();
		$data['tabel'] = $this->m_view_tabel->get_tembakau()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/tembakau.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function wijen()
	{
		$data['dat_wijen'] = $this->m_view_tabel->v_tabel_wijen()->result();
		$data['tabel'] = $this->m_view_tabel->get_wijen()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/wijen.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function stevia()
	{
		$data['dat_stevia'] = $this->m_view_tabel->v_tabel_stevia()->result();
		$data['tabel'] = $this->m_view_tabel->get_stevia()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/stevia.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function gulabit()
	{
		$data['dat_gulabit'] = $this->m_view_tabel->v_tabel_gulabit()->result();
		$data['tabel'] = $this->m_view_tabel->get_gulabit()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/gulabit.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function rosela()
	{
		$data['dat_rosela'] = $this->m_view_tabel->v_tabel_rosela()->result();
		$data['tabel'] = $this->m_view_tabel->get_rosela()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/rosela.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function agave()
	{
		$data['dat_agave'] = $this->m_view_tabel->v_tabel_agave()->result();
		$data['tabel'] = $this->m_view_tabel->get_agave()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/agave.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function jarak_kepyar()
	{
		$data['dat_jarak_kepyar'] = $this->m_view_tabel->v_tabel_jarak_kepyar()->result();
		$data['tabel'] = $this->m_view_tabel->get_jarak_kepyar()->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/jarak_kepyar.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	//BATAS EDIT BOSSQUE
	function edit_abaka($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_abaka'] = $this->m_edit_data->edit_data($where, 'dat_abaka')->result_array();
		$data['pas_abaka'] = $this->m_edit_data->edit_data($where, 'pas_abaka')->result();
		$data['foto_abaka'] = $this->m_edit_data->edit_data($where, 'foto_abaka')->result();
		$data['idkar'] = $this->db->get('tab_abaka')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_abaka.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	function edit_bm($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_bunga_matahari'] = $this->m_edit_data->edit_data($where, 'dat_bunga_matahari')->result();
		$data['pas_bunga_matahari'] = $this->m_edit_data->edit_data($where, 'pas_bunga_matahari')->result();
		$data['foto_bunga_matahari'] = $this->m_edit_data->edit_data($where, 'foto_bunga_matahari')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_bm.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	function edit_jp($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_jarak_pagar'] = $this->m_edit_data->edit_data($where, 'dat_jarak_pagar')->result();
		$data['pas_jarak_pagar'] = $this->m_edit_data->edit_data($where, 'pas_jarak_pagar')->result();
		$data['foto_jarak_pagar'] = $this->m_edit_data->edit_data($where, 'foto_jarak_pagar')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_jp.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	function edit_kapas($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_kapas'] = $this->m_edit_data->edit_data($where, 'dat_kapas')->result();
		$data['pas_kapas'] = $this->m_edit_data->edit_data($where, 'pas_kapas')->result();
		$data['foto_kapas'] = $this->m_edit_data->edit_data($where, 'foto_kapas')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_kapas.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	function edit_kapuk($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_kapuk'] = $this->m_edit_data->edit_data($where, 'dat_kapuk')->result();
		$data['pas_kapuk'] = $this->m_edit_data->edit_data($where, 'pas_kapuk')->result();
		$data['foto_kapuk'] = $this->m_edit_data->edit_data($where, 'foto_kapuk')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_kapuk.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	function edit_kemiri($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_kemiri'] = $this->m_edit_data->edit_data($where, 'dat_kemiri')->result();
		$data['pas_kemiri'] = $this->m_edit_data->edit_data($where, 'pas_kemiri')->result();
		$data['foto_kemiri'] = $this->m_edit_data->edit_data($where, 'foto_kemiri')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_kemiri.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	function edit_kenaf($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_kenaf'] = $this->m_edit_data->edit_data($where, 'dat_kenaf')->result();
		$data['pas_kenaf'] = $this->m_edit_data->edit_data($where, 'pas_kenaf')->result();
		$data['foto_kenaf'] = $this->m_edit_data->edit_data($where, 'foto_kenaf')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_kenaf.php', $data);
		$this->load->view('templates/footer.php', $data);
	}


	function edit_rami($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_rami'] = $this->m_edit_data->edit_data($where, 'dat_rami')->result();
		$data['pas_rami'] = $this->m_edit_data->edit_data($where, 'pas_rami')->result();
		$data['foto_rami'] = $this->m_edit_data->edit_data($where, 'foto_rami')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_rami.php', $data);
		$this->load->view('templates/footer.php', $data);
	}


	function edit_tebu($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_tebu'] = $this->m_edit_data->edit_data($where, 'dat_tebu')->result();
		$data['pas_tebu'] = $this->m_edit_data->edit_data($where, 'pas_tebu')->result();
		$data['foto_tebu'] = $this->m_edit_data->edit_data($where, 'foto_tebu')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_tebu.php', $data);
		$this->load->view('templates/footer.php', $data);
	}


	function edit_tembakau($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_tembakau'] = $this->m_edit_data->edit_data($where, 'dat_tembakau')->result();
		$data['pas_tembakau'] = $this->m_edit_data->edit_data($where, 'pas_tembakau')->result();
		$data['foto_tembakau'] = $this->m_edit_data->edit_data($where, 'foto_tembakau')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_tembakau.php', $data);
		$this->load->view('templates/footer.php', $data);
	}


	function edit_wijen($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_wijen'] = $this->m_edit_data->edit_data($where, 'dat_wijen')->result();
		$data['pas_wijen'] = $this->m_edit_data->edit_data($where, 'pas_wijen')->result();
		$data['foto_wijen'] = $this->m_edit_data->edit_data($where, 'foto_wijen')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_wijen.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	//BATAS HAPUS BOSQUEE

	function hapus_abaka($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_abaka');
		$this->m_edit_data->hapus_data($where, 'foto_abaka');
		$this->m_edit_data->hapus_data($where, 'benih_abaka');
		$this->m_edit_data->hapus_data($where, 'pas_abaka');
		redirect('tanaman/abaka');
	}

	function hapus_agave($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_agave');
		$this->m_edit_data->hapus_data($where, 'foto_agave');
		$this->m_edit_data->hapus_data($where, 'benih_agave');
		$this->m_edit_data->hapus_data($where, 'pas_agave');
		redirect('tanaman/agave');
	}

	function hapus_stevia($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_stevia');
		$this->m_edit_data->hapus_data($where, 'foto_stevia');
		$this->m_edit_data->hapus_data($where, 'benih_stevia');
		$this->m_edit_data->hapus_data($where, 'pas_stevia');
		redirect('tanaman/stevia');
	}

	function hapus_rosela($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_rosela');
		$this->m_edit_data->hapus_data($where, 'foto_rosela');
		$this->m_edit_data->hapus_data($where, 'benih_rosela');
		$this->m_edit_data->hapus_data($where, 'pas_rosela');
		redirect('tanaman/rosela');
	}

	function hapus_gulabit($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_gulabit');
		$this->m_edit_data->hapus_data($where, 'foto_gulabit');
		$this->m_edit_data->hapus_data($where, 'benih_gulabit');
		$this->m_edit_data->hapus_data($where, 'pas_gulabit');
		redirect('tanaman/abaka');
	}

	function hapus_jarak_kepyar($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_abaka');
		$this->m_edit_data->hapus_data($where, 'foto_abaka');
		$this->m_edit_data->hapus_data($where, 'benih_abaka');
		$this->m_edit_data->hapus_data($where, 'pas_abaka');
		redirect('tanaman/abaka');
	}

	function hapus_bm($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_bunga_matahari');
		$this->m_edit_data->hapus_data($where, 'foto_bunga_matahari');
		$this->m_edit_data->hapus_data($where, 'benih_bunga_matahari');
		$this->m_edit_data->hapus_data($where, 'pas_bunga_matahari');
		redirect('tanaman/bunga_matahari');
	}

	function hapus_jp($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_jarak_pagar');
		$this->m_edit_data->hapus_data($where, 'foto_jarak_pagar');
		$this->m_edit_data->hapus_data($where, 'benih_jarak_pagar');
		$this->m_edit_data->hapus_data($where, 'pas_jarak_pagar');
		redirect('tanaman/jarak_pagar');
	}

	function hapus_kapas($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_kapas');
		$this->m_edit_data->hapus_data($where, 'foto_kapas');
		$this->m_edit_data->hapus_data($where, 'benih_kapas');
		$this->m_edit_data->hapus_data($where, 'pas_kapas');
		redirect('tanaman/kapas');
	}

	function hapus_kapuk($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_kapuk');
		$this->m_edit_data->hapus_data($where, 'foto_kapuk');
		$this->m_edit_data->hapus_data($where, 'benih_kapuk');
		$this->m_edit_data->hapus_data($where, 'pas_kapuk');
		redirect('tanaman/kapuk');
	}

	function hapus_kemiri($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_kemiri');
		$this->m_edit_data->hapus_data($where, 'foto_kemiri');
		$this->m_edit_data->hapus_data($where, 'benih_kemiri');
		$this->m_edit_data->hapus_data($where, 'pas_kemiri');
		redirect('tanaman/kemiri');
	}

	function hapus_kenaf($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_kenaf');
		$this->m_edit_data->hapus_data($where, 'foto_kenaf');
		$this->m_edit_data->hapus_data($where, 'benih_kenaf');
		$this->m_edit_data->hapus_data($where, 'pas_kenaf');
		redirect('tanaman/kenaf');
	}

	function hapus_rami($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_rami');
		$this->m_edit_data->hapus_data($where, 'foto_rami');
		$this->m_edit_data->hapus_data($where, 'benih_rami');
		$this->m_edit_data->hapus_data($where, 'pas_rami');
		redirect('tanaman/rami');
	}

	function hapus_tebu($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_tebu');
		$this->m_edit_data->hapus_data($where, 'foto_tebu');
		$this->m_edit_data->hapus_data($where, 'benih_tebu');
		$this->m_edit_data->hapus_data($where, 'pas_tebu');
		redirect('tanaman/tebu');
	}

	function hapus_tembakau($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_tembakau');
		$this->m_edit_data->hapus_data($where, 'foto_tembakau');
		$this->m_edit_data->hapus_data($where, 'benih_tembakau');
		$this->m_edit_data->hapus_data($where, 'pas_tembakau');
		redirect('tanaman/tembakau');
	}

	function hapus_wijen($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'dat_wijen');
		$this->m_edit_data->hapus_data($where, 'foto_wijen');
		$this->m_edit_data->hapus_data($where, 'benih_wijen');
		$this->m_edit_data->hapus_data($where, 'pas_wijen');
		redirect('tanaman/wijen');
	}
}
