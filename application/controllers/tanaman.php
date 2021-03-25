<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanaman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('m_view_tabel');
		$this->load->model('m_edit_data');
		$this->load->library('session');
	}
	public function abaka()
	{

		$data['dat_abaka'] = $this->m_view_tabel->v_tabel_abaka()->result();
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
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/wijen.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	//BATAS EDIT BOSSQUE
	function edit_abaka($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_abaka'] = $this->m_edit_data->edit_data($where, 'dat_abaka')->result();
		$data['pas_abaka'] = $this->m_edit_data->edit_data($where, 'pas_abaka')->result();
		$data['foto_abaka'] = $this->m_edit_data->edit_data($where, 'foto_abaka')->result();

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
		$data['foto_bunga_matahari'] = $this->m_edit_data->edit_data($where, 'foto_bunga_matahari')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_bm.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	function edit_kapas($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dat_kapas'] = $this->m_edit_data->edit_data($where, 'dat_kapas')->result();
		$data['foto_kapas'] = $this->m_edit_data->edit_data($where, 'foto_kapas')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('edit/edit_kapas.php', $data);
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
