<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('m_user');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $user = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data = array(
            'title' => 'Landing Page',
            'user' => $user,
            'limbah' => $this->db->count_all_results('tb_kayu'),
            'karya' => $this->db->count_all_results('tb_karya'),
            'total_donatur' => $this->db->where('role_id', 2)->count_all_results('user'),
            'total_toko' => $this->db->where('role_id', 3)->count_all_results('user')
        );

        $data['tampilkarya'] = $this->model_karya->tampil_data()->result();
        $data['berita'] = $this->Berita_model->getAllBerita();
        $data['users'] = $this->m_user->get_all_data();
        // $this->load->view('index');
        $this->load->view('templates_user/landing_header', $data);
        $this->load->view('templates_user/landing_topbar', $data);
        $this->load->view('landing_page/index', $data);
        $this->load->view('templates_user/landing_footer', $data);
    }

    public function Karya_Toko()
    {
        $user = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data = array(
            'title' => 'Karya Toko',
            'user' => $user,
            'limbah' => $this->db->count_all_results('tb_kayu'),
            'karya' => $this->db->count_all_results('tb_karya'),
            'total_donatur' => $this->db->where('role_id', 2)->count_all_results('user'),
            'total_toko' => $this->db->where('role_id', 3)->count_all_results('user')
        );

        $data['tampilkarya'] = $this->model_karya->tampil_data()->result();
        $data['karya']  = $this->db->query("SELECT * FROM tb_karya l JOIN user cs ON l.id = cs.id ORDER BY id_kry DESC")->result_array();
        // $this->load->view('index');
        $this->load->view('templates_user/landing_header', $data);
        $this->load->view('templates_user/landing_topbar', $data);
        $this->load->view('landing_page/karya_toko', $data);
        $this->load->view('templates_user/landing_footer', $data);
    }

    public function team()
    {
        $user = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data = array(
            'title' => 'Team',
            'user' => $user,
            'limbah' => $this->db->count_all_results('tb_kayu'),
            'karya' => $this->db->count_all_results('tb_karya'),
            'total_donatur' => $this->db->where('role_id', 2)->count_all_results('user'),
            'total_toko' => $this->db->where('role_id', 3)->count_all_results('user')
        );

        $data['tampilkarya'] = $this->model_karya->tampil_data()->result();
        // $this->load->view('index');
        $this->load->view('templates_user/landing_header', $data);
        $this->load->view('templates_user/landing_topbar', $data);
        $this->load->view('landing_page/team', $data);
        $this->load->view('templates_user/landing_footer', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">You have been logged out!</div>');
        redirect('landing_konten');
    }

    public function detail_berita($id)
    {
        $data['title'] = 'Landing Page';
        $data['berita'] = $this->Berita_model->getBeritaById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates_user/landing_header', $data);
        $this->load->view('templates_user/landing_topbar', $data);
        $this->load->view('landing_page/detail', $data);
        $this->load->view('templates_user/landing_footer', $data);
    }
}
