<?php
class Modal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        $this->load->model("M_edit_data");
        $this->load->library('session');
        $this->load->model("m_modal");
    }

    function agave_result()
    {
        $this->load->view('modal/v_mdl_agave');
    }
}
