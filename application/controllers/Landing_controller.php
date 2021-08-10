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
        $data['bm'] = $this->m_view_data->jumlah_bm();
        $data['des_bm'] = $this->m_view_data->deskriptor_bm();
        $data['jp'] = $this->m_view_data->jumlah_jp();
        $data['des_jp'] = $this->m_view_data->deskriptor_jp();
        $data['kapas'] = $this->m_view_data->jumlah_kapas();
        $data['des_kapas'] = $this->m_view_data->deskriptor_kapas();
        $data['kapuk'] = $this->m_view_data->jumlah_kapuk();
        $data['des_kapuk'] = $this->m_view_data->deskriptor_kapuk();
        $data['kemiri'] = $this->m_view_data->jumlah_kemiri();
        $data['des_kemiri'] = $this->m_view_data->deskriptor_kemiri();
        $data['kenaf'] = $this->m_view_data->jumlah_kenaf();
        $data['des_kenaf'] = $this->m_view_data->deskriptor_kenaf();
        $data['rami'] = $this->m_view_data->jumlah_rami();
        $data['des_rami'] = $this->m_view_data->deskriptor_rami();
        $data['tebu'] = $this->m_view_data->jumlah_tebu();
        $data['des_tebu'] = $this->m_view_data->deskriptor_tebu();
        $data['tembakau'] = $this->m_view_data->jumlah_tembakau();
        $data['des_tembakau'] = $this->m_view_data->deskriptor_tembakau();
        $data['wijen'] = $this->m_view_data->jumlah_wijen();
        $data['des_wijen'] = $this->m_view_data->deskriptor_wijen();

        $this->load->view('utama/landing_page.php', $data);
    }
}
