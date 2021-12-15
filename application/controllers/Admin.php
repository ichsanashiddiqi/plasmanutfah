<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('email') == null) {
	    redirect("auth");
	}
	$this->load->model('m_edit_data');
    }

    function hapus_abaka($kar) {
	$where = array('kar' => $kar);
	$this->m_edit_data->hapus_data($where, 'tab_abaka');
    }
}
