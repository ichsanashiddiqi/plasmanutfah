<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanaman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function abaka()
	{

		$data['dat_abaka'] = $this->db->get('dat_abaka')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/abaka.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kapas()
	{
		$data['dat_kapas'] = $this->db->get('dat_kapas')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kapas.php', $data);
		$this->load->view('templates/footer.php', $data);
	}


	public function jarak_pagar()
	{
		$data['dat_jarak_pagar'] = $this->db->get('dat_jarak_pagar')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/jarak_pagar.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kapuk()
	{
		$data['dat_kapuk'] = $this->db->get('dat_kapuk')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kapuk.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kemiri()
	{
		$data['dat_kemiri'] = $this->db->get('dat_kemiri')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kemiri.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function kenaf()
	{
		$data['dat_kenaf'] = $this->db->get('dat_kenaf')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/kenaf.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function rami()
	{
		$data['dat_rami'] = $this->db->get('dat_rami')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/rami.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function tebu()
	{
		$data['dat_tebu'] = $this->db->get('dat_tebu')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/tebu.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function tembakau()
	{
		$data['dat_tembakau'] = $this->db->get('dat_tembakau')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/tembakau.php', $data);
		$this->load->view('templates/footer.php', $data);
	}

	public function wijen()
	{
		$data['dat_wijen'] = $this->db->get('dat_wijen')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/wijen.php', $data);
		$this->load->view('templates/footer.php', $data);
	}
}
