<?php
class edit_tebu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') == null) {
            redirect("auth");
        }
        $this->load->model('m_edit_data');
        $this->load->helper('url');
    }

    // BATAS ABAKA

    function kar_tebu()
    {
        $no_aksesi = $this->input->post('no_aksesi');
        $no_aksesi_IDN = $this->input->post('no_aksesi_IDN');
        $nama_aksesi = $this->input->post('nama_aksesi');
        $Propinsi = $this->input->post('Propinsi');
        $Kabupaten = $this->input->post('Kabupaten');
        $Kecamatan = $this->input->post('Kecamatan');
        $Desa = $this->input->post('Desa');
        $Negara = $this->input->post('Negara');
        $Donor = $this->input->post('Donor');
        $Longitude = $this->input->post('Longitude');
        $Lattitude = $this->input->post('Lattitude');
        $kar_01 = $this->input->post('kar_01');
        $kar_02 = $this->input->post('kar_02');
        $kar_03 = $this->input->post('kar_03');
        $kar_04 = $this->input->post('kar_04');
        $kar_05 = $this->input->post('kar_05');
        $kar_06 = $this->input->post('kar_06');
        $kar_07 = $this->input->post('kar_07');
        $kar_08 = $this->input->post('kar_08');
        $kar_09 = $this->input->post('kar_09');
        $kar_10 = $this->input->post('kar_10');
        $kar_11 = $this->input->post('kar_11');
        $kar_12 = $this->input->post('kar_12');
        $kar_13 = $this->input->post('kar_13');
        $kar_14 = $this->input->post('kar_14');
        $kar_15 = $this->input->post('kar_15');
        $kar_16 = $this->input->post('kar_16');
        $kar_17 = $this->input->post('kar_17');
        $kar_18 = $this->input->post('kar_18');
        $kar_19 = $this->input->post('kar_19');
        $kar_20 = $this->input->post('kar_20');
        $kar_21 = $this->input->post('kar_21');
        $kar_22 = $this->input->post('kar_22');
        $kar_23 = $this->input->post('kar_23');
        $kar_24 = $this->input->post('kar_24');
        $kar_25 = $this->input->post('kar_25');
        $kar_26 = $this->input->post('kar_26');
        $kar_27 = $this->input->post('kar_27');
        $kar_28 = $this->input->post('kar_28');
        $kar_29 = $this->input->post('kar_29');
        $kar_30 = $this->input->post('kar_30');
        $kar_31 = $this->input->post('kar_31');
        $kar_32 = $this->input->post('kar_32');
        $kar_33 = $this->input->post('kar_33');
        $kar_34 = $this->input->post('kar_34');


        $data = array(
            'no_aksesi_IDN' => $no_aksesi_IDN,
            'nama_aksesi' => $nama_aksesi,
            'Propinsi' => $Propinsi,
            'Kabupaten' => $Kabupaten,
            'Kecamatan' => $Kecamatan,
            'Desa' => $Desa,
            'Negara' => $Negara,
            'Donor' => $Donor,
            'Longitude' => $Longitude,
            'Lattitude' => $Lattitude,
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

        );

        $where = array(
            'no_aksesi' => $no_aksesi
        );

        $this->m_edit_data->update_data($where, $data, 'dat_tebu');
        redirect('tanaman/edit_tebu');
    }

    function pas_tebu()
    {
        $no_aksesi = $this->input->post('no_aksesi');
        $pas_01 = $this->input->post('pas_01');
        $pas_02 = $this->input->post('pas_02');
        $pas_03 = $this->input->post('pas_03');
        $pas_04 = $this->input->post('pas_04');
        $pas_13 = $this->input->post('pas_13');
        $pas_14 = $this->input->post('pas_14');
        $pas_15 = $this->input->post('pas_15');
        $pas_16 = $this->input->post('pas_16');
        $pas_17 = $this->input->post('pas_17');
        $pas_18 = $this->input->post('pas_18');
        $pas_19 = $this->input->post('pas_19');
        $pas_20 = $this->input->post('pas_20');
        $pas_21 = $this->input->post('pas_21');
        $pas_22 = $this->input->post('pas_22');
        $pas_23 = $this->input->post('pas_23');
        $pas_24 = $this->input->post('pas_24');
        $pas_25 = $this->input->post('pas_25');
        $pas_26 = $this->input->post('pas_26');
        $pas_27 = $this->input->post('pas_27');
        $pas_28 = $this->input->post('pas_28');
        $pas_29 = $this->input->post('pas_29');
        $pas_30 = $this->input->post('pas_30');
        $pas_31 = $this->input->post('pas_31');
        $pas_32 = $this->input->post('pas_32');

        $data = array(
            'no_aksesi' =>  $no_aksesi,
            'pas_01' => $pas_01,
            'pas_02' => $pas_02,
            'pas_03' => $pas_03,
            'pas_04' => $pas_04,
            'pas_13' => $pas_13,
            'pas_14' => $pas_14,
            'pas_15' => $pas_15,
            'pas_16' => $pas_16,
            'pas_17' => $pas_17,
            'pas_18' => $pas_18,
            'pas_19' => $pas_19,
            'pas_20' => $pas_20,
            'pas_21' => $pas_21,
            'pas_22' => $pas_22,
            'pas_23' => $pas_23,
            'pas_24' => $pas_24,
            'pas_25' => $pas_25,
            'pas_26' => $pas_26,
            'pas_27' => $pas_27,
            'pas_28' => $pas_28,
            'pas_29' => $pas_29,
            'pas_30' => $pas_30,
            'pas_31' => $pas_31,
            'pas_32' => $pas_32,

        );

        $where = array(
            'no_aksesi' => $no_aksesi
        );

        $this->m_edit_data->update_data($where, $data, 'pas_tebu');
        redirect('tanaman/edit_tebu' . $no_aksesi);
    }

    function tambah_foto()
    {
        $no_aksesi = $this->input->post('no_aksesi');
        $image_nama = $this->input->post('image_nama');
        $Image_keterangan = $this->input->post('Image_keterangan');
        $Image = isset($_FILES['Image']);
        if ($Image = '') {
        } else {
            $config['upload_path'] = './assets/data/';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('Image')) {
                echo "Upload Gagal";
                die();
            } else {
                $Image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'no_aksesi' => $no_aksesi,
            'Image' => $Image,
            'image_nama' => $image_nama,
            'Image_keterangan' => $Image_keterangan

        );
        $where = array(
            'no_aksesi' => $no_aksesi
        );

        $this->m_edit_data->update_data($where, $data, 'foto_tebu');
        redirect('tanaman/edit_tebu');
    }
}
