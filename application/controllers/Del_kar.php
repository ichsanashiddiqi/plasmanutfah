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


    
    function hapus_kar_abaka($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'tab_abaka');
		redirect('tanaman/abaka');
	}

    function hapus_kar_agave($no_aksesi)
	{
		$where = array('no_aksesi' => $no_aksesi);
		$this->m_edit_data->hapus_data($where, 'tab_agave');
		redirect('tanaman/agave');
	}
}