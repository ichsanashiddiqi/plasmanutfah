<?php
class Add_bm extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email') == null) {
            redirect("auth");
        }
        $this->load->model('m_add_data');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    function tambah_aksi()
    {
        $this->form_validation->set_rules('no_aksesi', 'No_aksesi', 'required|trim|is_unique[dat_bm.no_aksesi]', [
            'is_unique' => 'Nomor Aksesi sudah digunakan!',
            'required' => 'Mohon form untuk diisi'
        ]);
        $this->form_validation->set_rules('nama_aksesi', 'Nama_aksesi', 'required|trim|is_unique[dat_bm.nama_aksesi]', [
            'is_unique' => 'Nomor Aksesi sudah digunakan!',
            'required' => 'Mohon form untuk diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['idkar'] = $this->db->get('tab_bm')->result_array();
            $data['tabel'] = $this->db->get('tab_bm')->result();

            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('tambah/tambah_bm.php', $data);
            $this->load->view('templates/footer.php', $data);
        } else {
            $no_aksesi = $this->input->post('no_aksesi');
            $no_aksesi_IDN = $this->input->post('no_aksesi_IDN');
            $nama_aksesi = $this->input->post('nama_aksesi');
            $Propinsi = $this->input->post('Propinsi');
            $Kabupaten = $this->input->post('Kabupaten');
            $Kecamatan = $this->input->post('Kecamatan');
            $Desa = $this->input->post('Desa');
            $Negara = $this->input->post('Negara');
            $Donor = $this->input->post('Donor');
            $longitude = $this->input->post('longitude');
            $lattitude = $this->input->post('lattitude');
            $kar_1 = $this->input->post('kar_1');
            $kar_2 = $this->input->post('kar_2');
            $kar_3 = $this->input->post('kar_3');
            $kar_4 = $this->input->post('kar_4');
            $kar_5 = $this->input->post('kar_5');
            $kar_6 = $this->input->post('kar_6');
            $kar_7 = $this->input->post('kar_7');
            $kar_8 = $this->input->post('kar_8');
            $kar_9 = $this->input->post('kar_9');
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
            $kar_35 = $this->input->post('kar_35');
            $kar_36 = $this->input->post('kar_36');
            $kar_37 = $this->input->post('kar_37');
            $kar_38 = $this->input->post('kar_38');
            $kar_39 = $this->input->post('kar_39');
            $kar_40 = $this->input->post('kar_40');
            $kar_41 = $this->input->post('kar_41');
            $kar_42 = $this->input->post('kar_42');
            $kar_43 = $this->input->post('kar_43');
            $kar_44 = $this->input->post('kar_44');
            $kar_45 = $this->input->post('kar_45');
            $kar_46 = $this->input->post('kar_46');
            $kar_47 = $this->input->post('kar_47');
            $kar_48 = $this->input->post('kar_48');
            $kar_49 = $this->input->post('kar_49');
            $kar_50 = $this->input->post('kar_50');
            $kar_51 = $this->input->post('kar_51');
            $kar_52 = $this->input->post('kar_52');
            $kar_53 = $this->input->post('kar_53');
            $kar_54 = $this->input->post('kar_54');
            $kar_55 = $this->input->post('kar_55');
            $kar_56 = $this->input->post('kar_56');
            $kar_57 = $this->input->post('kar_57');
            $kar_58 = $this->input->post('kar_58');
            $kar_59 = $this->input->post('kar_59');
            $kar_60 = $this->input->post('kar_60');

            $data = array(
                'no_aksesi' =>  $no_aksesi,
                'no_aksesi_IDN' => $no_aksesi_IDN,
                'nama_aksesi' => $nama_aksesi,
                'Propinsi' => $Propinsi,
                'Kabupaten' => $Kabupaten,
                'Kecamatan' => $Kecamatan,
                'Desa' => $Desa,
                'Negara' => $Negara,
                'Donor' => $Donor,
                'longitude' => $longitude,
                'lattitude' => $lattitude,
                'kar_1' => $kar_1,
                'kar_2' => $kar_2,
                'kar_3' => $kar_3,
                'kar_4' => $kar_4,
                'kar_5' => $kar_5,
                'kar_6' => $kar_6,
                'kar_7' => $kar_7,
                'kar_8' => $kar_8,
                'kar_9' => $kar_9,
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
                'kar_39' => $kar_39,
                'kar_40' => $kar_40,
                'kar_41' => $kar_41,
                'kar_42' => $kar_42,
                'kar_43' => $kar_43,
                'kar_44' => $kar_44,
                'kar_45' => $kar_45,
                'kar_46' => $kar_46,
                'kar_47' => $kar_47,
                'kar_48' => $kar_48,
                'kar_49' => $kar_49,
                'kar_50' => $kar_50,
                'kar_51' => $kar_51,
                'kar_52' => $kar_52,
                'kar_53' => $kar_53,
                'kar_54' => $kar_54,
                'kar_55' => $kar_55,
                'kar_56' => $kar_56,
                'kar_57' => $kar_57,
                'kar_58' => $kar_58,
                'kar_59' => $kar_59,
                'kar_60' => $kar_60,

            );
            $this->m_add_data->input_data($data, 'dat_bunga_matahari');
            redirect('tambah/bunga_matahari2');
        }
    }

    function tambah_pas()
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
        $pas_33 = $this->input->post('pas_33');

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
            'pas_33' => $pas_33,

        );
        $this->m_add_data->input_data($data, 'dat_bunga_matahari');
        redirect('tambah/bunga_matahari2');
    }

    function tambah_foto()
    {
        $no_aksesi = $this->input->post('no_aksesi');
        $image_nama = $this->input->post('image_nama');
        $image_keterangan = $this->input->post('image_keterangan');
        $image = isset($_FILES['image']);
        if ($image = '') {
        } else {
            $config['upload_path'] = './assets/data/';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Upload Gagal";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'no_aksesi' => $no_aksesi,
            'image' => $image,
            'image_nama' => $image_nama,
            'image_keterangan' => $image_keterangan

        );
        $this->m_add_data->input_data($data, 'foto_bunga_matahari');
        redirect('tambah/bunga_matahari2');
    }

    function tambah_benih()
    {
        $no_aksesi = $this->input->post('no_aksesi');
        $tahun = $this->input->post('tahun');
        $daya_percambahan = $this->input->post('daya_percambahan');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'no_aksesi' =>  $no_aksesi,
            'tahun' =>  $tahun,
            'daya_percambahan' =>  $daya_percambahan,
            'jumlah' =>  $jumlah,
        );
        $this->m_add_data->input_data($data, 'benih_abaka');
        redirect('tambah/abaka2');
    }
}
