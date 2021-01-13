<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanaman extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
    }
    public function abaka()
	{

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('db_tanaman/abaka.php', $data);
		$this->load->view('templates/footer.php', $data);
	}
}
