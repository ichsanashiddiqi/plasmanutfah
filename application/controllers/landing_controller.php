<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_view_data');
    }
    public function index()
    {
        $data['abaka'] = $this->m_view_data->jumlah_abaka();
        $data['des_abaka'] = $this->m_view_data->deskriptor_abaka();
        $this->load->view('utama/landing_page.php', $data);
    }
}
