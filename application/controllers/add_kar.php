<?php
class Add_kar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        $this->load->model("M_edit_data");
        $this->load->library('session');
    }


    function create_kolom()
    {

        $kolom = $this->input->post('kolom');

        $fields = array(
            $kolom => array(
                'type' => 'TEXT'
            )
        );
        $this->dbforge->add_column('dat_abaka', $fields);
        redirect('tambah/abaka');
    }
}
