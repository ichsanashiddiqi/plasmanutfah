<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email') == null) {
            redirect("auth");
        }
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('m_view_tabel');

        // is_logged_in();
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('landing/landing.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function daftar_user()
    {

        $data['tamu'] = $this->m_view_tabel->v_tabel_user()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('landing/daftar_user.php', $data);
        $this->load->view('templates/footer.php', $data);
    }



    public function registration()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah pernah dipakai!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('landing/registration.php', $data);
            $this->load->view('templates/footer.php', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            redirect('auth/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('landing/profile.php', $data);
        $this->load->view('templates/footer.php', $data);
    }
    public function status_data()
    {
        $data['abk'] = $this->m_view_tabel->jml_abaka()->result();
        $data['bm'] = $this->m_view_tabel->jml_bm()->result();
        $data['jp'] = $this->m_view_tabel->jml_jp()->result();
        $data['kps'] = $this->m_view_tabel->jml_kapas()->result();
        $data['kpk'] = $this->m_view_tabel->jml_kapuk()->result();
        $data['kmr'] = $this->m_view_tabel->jml_kemiri()->result();
        $data['knf'] = $this->m_view_tabel->jml_kenaf()->result();
        $data['rm'] = $this->m_view_tabel->jml_rami()->result();
        $data['tebu'] = $this->m_view_tabel->jml_tebu()->result();
        $data['bako'] = $this->m_view_tabel->jml_tembakau()->result();
        $data['wijen'] = $this->m_view_tabel->jml_wijen()->result();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('landing/status_data.php', $data);
        $this->load->view('templates/footer.php', $data);
    }
}
