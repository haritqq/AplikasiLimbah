<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Role_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data = array(
            'title' => 'Dashboard',
            'user' => $user,
            'limbahkayu' => $this->db->count_all_results('tb_kayu'),
            'karya' => $this->db->count_all_results('tb_karya'),
            'total_donatur' => $this->db->where('role_id', 2)->count_all_results('user'),
            'total_toko' => $this->db->where('role_id', 3)->count_all_results('user')
        );

        $data['kriteria'] = $this->db->count_all_results('kriteria');
        $data['subkriteria'] = $this->db->count_all_results('subkriteria');
        $data['limbah'] = $this->db->count_all_results('limbah');
        $data['rangking'] = $this->db->count_all_results('rangking');
        $data['hasil'] = $this->Role_model->Jum_mahasiswa_role();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['namarole']   = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> New role added!</div>');
            redirect('admin/role');
        }
    }

    public function cetak()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('admin/print_berhasil', $data);
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert">Access Changed!</div>');
    }

    public function editrole()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('roleedit', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Role_model->ubahDataRole();
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Role Berhasil Diubah!</div>');
            redirect('admin/role');
        }
    }
    public function hapusrole()
    {

        $this->Role_model->hapusDataRole();
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> Role Berhasil Dihapus!</div>');
        redirect('admin/role');
    }

    public function landing_page()
    {
        $data['title'] = 'Landing Page';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('Landing_header');
        $this->load->view('admin/landing_page/lp_topbar', $data);
        $this->load->view('admin/landing_page/lp_konten');
        $this->load->view('Landing_footer');
        // $this->load->view('templates/Landingpage_footer');
    }
}
