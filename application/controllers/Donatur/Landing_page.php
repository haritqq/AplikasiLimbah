<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{
public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
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
        $data['berita'] = $this->Berita_model->getAllBerita();

        $data = array(
            'title' => 'Landing Page',
            'user' => $user,
            'limbah' => $this->db->count_all_results('tb_kayu'),
            'karya' => $this->db->count_all_results('tb_karya'),
            'total_donatur' => $this->db->where('role_id', 2)->count_all_results('user'),
            'total_toko' => $this->db->where('role_id', 3)->count_all_results('user')

        );

        $this->load->view('Landing_header', $data);
        $this->load->view('toko/landing_page/lp_topbar', $data);
        $this->load->view('toko/landing_page/lp_konten', $data);
        $this->load->view('Landing_footer');
        // $this->load->view('templates/Landingpage_footer');
    }

    public function detail_berita($id)
    {
        $data['title'] = 'Landing Page';
        $data['berita'] = $this->Berita_model->getBeritaById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Landing_header');
        $this->load->view('donatur/landing_page/lp_topbar', $data);
        $this->load->view('donatur/landing_page/detail', $data);
    }
}
