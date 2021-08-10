<?php
class Add_kar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        $this->load->model("M_edit_data");
        $this->load->library('session');
        $this->load->model("m_add_data");
    }

    // SORRY YANG DIBAWAH INI CREATEKOLOM TANAMAN ABAKA OKE!!
    function create_kolom()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_abaka');
        redirect('tambah/abaka');
    }
    function kolom_kapas()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_kapas');
        redirect('tambah/kapas');
    }

    function kolom_tebu()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_tebu');
        redirect('tambah/tebu');
    }

    function kolom_stevia()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_stevia');
        redirect('tambah/stevia');
    }

    function kolom_gulabit()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_gulabit');
        redirect('tambah/gulabit');
    }

    function kolom_kapuk()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_kapuk');
        redirect('tambah/kapuk');
    }

    function kolom_kenaf()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_kenaf');
        redirect('tambah/kenaf');
    }

    function kolom_rami()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_rami');
        redirect('tambah/rami');
    }

    function kolom_rosela()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_rosela');
        redirect('tambah/rosela');
    }

    function kolom_agave()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_agave');
        redirect('tambah/agave');
    }

    function kolom_tembakau()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_tembakau');
        redirect('tambah/tembakau');
    }

    function kolom_wijen()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_wijen');
        redirect('tambah/wijen');
    }

    function kolom_jarak_pagar()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_jarak_pagar');
        redirect('tambah/jarak_pagar');
    }

    function kolom_bm()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_bm');
        redirect('tambah/bm');
    }

    function kolom_kemiri()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_kemiri');
        redirect('tambah/kemiri');
    }

    function kolom_jarak_kepyar()
    {

        $kar = $this->input->post('kar');
        $question = $this->input->post('question');
        $data = array(
            'kar' =>  $kar,
            'question' => $question,
        );
        $this->m_add_data->input_data($data, 'tab_jarak_kepyar');
        redirect('tambah/jarak_kepyar');
    }
}
