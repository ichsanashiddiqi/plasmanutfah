<?php
class add_abaka extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function tambah_aksi()
    {
        $no_aksesi = $this->input->post('no_aksesi');
        $no_aksesi_IDN = $this->input->post('no_aksesi_IDN');
        $nama_aksesi = $this->input->post('nama_aksesi');
        $Propinsi = $this->input->post('Propinsi');
        $Kabupaten = $this->input->post('Kabupaten');
        $Kecamatan = $this->input->post('Kecamatan');
        $Desa = $this->input->post('Desa');
        $Negara_asal = $this->input->post('Negara_asal');
        $Donor = $this->input->post('Donor');
        $longitude = $this->input->post('longitude');
        $lattitude = $this->input->post('lattitude');
        $kar_01 = $this->input->post('kar01');
        $kar_02 = $this->input->post('kar02');
        $kar_03 = $this->input->post('kar03');
        $kar_04 = $this->input->post('kar04');
        $kar_05 = $this->input->post('kar05');
        $kar_06 = $this->input->post('kar06');
        $kar_07 = $this->input->post('kar07');
        $kar_08 = $this->input->post('kar08');
        $kar_09 = $this->input->post('kar09');
        $kar_10 = $this->input->post('kar10');
        $kar_11 = $this->input->post('kar11');
        $kar_12 = $this->input->post('kar12');
        $kar_13 = $this->input->post('kar13');
        $kar_14 = $this->input->post('kar14');
        $kar_15 = $this->input->post('kar15');
        $kar_16 = $this->input->post('kar16');
        $kar_17 = $this->input->post('kar17');
        $kar_18 = $this->input->post('kar18');
        $kar_19 = $this->input->post('kar19');
        $kar_20 = $this->input->post('kar20');
        $kar_21 = $this->input->post('kar21');
        $kar_22 = $this->input->post('kar22');
        $kar_23 = $this->input->post('kar23');
        $kar_24 = $this->input->post('kar24');
        $kar_25 = $this->input->post('kar25');
        $kar_26 = $this->input->post('kar26');
        $kar_27 = $this->input->post('kar27');
        $kar_28 = $this->input->post('kar28');
        $kar_29 = $this->input->post('kar29');
        $kar_30 = $this->input->post('kar30');
        $kar_31 = $this->input->post('kar31');
        $kar_32 = $this->input->post('kar32');
        $kar_33 = $this->input->post('kar33');
        $kar_34 = $this->input->post('kar34');
        $kar_35 = $this->input->post('kar35');
        $kar_36 = $this->input->post('kar36');
        $kar_37 = $this->input->post('kar37');
        $kar_38 = $this->input->post('kar38');

        $data = array(
            'no_aksesi' =>  $no_aksesi,
            'no_aksesi_IDN' => $no_aksesi_IDN,
            'nama_aksesi' => $nama_aksesi,
            'Propinsi' => $Propinsi,
            'Kabupaten' => $Kabupaten,
            'Kecamatan' => $Kecamatan,
            'Desa' => $Desa,
            'Negara_asal' => $Negara_asal,
            'Donor' => $Donor,
            'longitude' => $longitude,
            'lattitude' => $lattitude,
            'kar_01' => $kar_01,
            'kar_02' => $kar_02,
            'kar_03' => $kar_03,
            'kar_04' => $kar_04,
            'kar_05' => $kar_05,
            'kar_06' => $kar_06,
            'kar_07' => $kar_07,
            'kar_08' => $kar_08,
            'kar_09' => $kar_09,
            'kar_10' => $kar_10,
            'kar_11' => $kar_11,
            'kar_12' => $kar_12,
            'kar_13' => $kar_13,
            'kar_14' => $kar_14,
            'kar_15' => $kar_15,
            'kar_16' => $kar_16,
            'kar_17' => $kar_17,
            'kar_18' => $kar_18,
            'kar_19' => $kar_19,
            'kar_20' => $kar_20,
            'kar_21' => $kar_21,
            'kar_22' => $kar_22,
            'kar_23' => $kar_23,
            'kar_24' => $kar_24,
            'kar_25' => $kar_25,
            'kar_26' => $kar_26,
            'kar_27' => $kar_27,
            'kar_28' => $kar_28,
            'kar_29' => $kar_29,
            'kar_30' => $kar_30,
            'kar_31' => $kar_31,
            'kar_32' => $kar_32,
            'kar_33' => $kar_33,
            'kar_34' => $kar_34,
            'kar_35' => $kar_35,
            'kar_36' => $kar_36,
            'kar_37' => $kar_37,
            'kar_38' => $kar_38,

        );
        $this->m_add_data->input_data($data, 'data_abaka');
        redirect('auth/tabel');
    }
}
