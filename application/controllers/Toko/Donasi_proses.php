<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_proses extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_limbah');
        if ($this->session->userdata('role_id') != '3') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/index');
        }
    }

    public function index()
    {

        $data['title'] = 'Donasi Proses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $user = $this->session->userdata('id');
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_kayu mb, user cs WHERE tr.id_ky=mb.id_ky AND tr.id=cs.id AND cs.id='$user' ORDER BY id_donasi DESC")->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/donasi_proses', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_kayu mb, user cs WHERE tr.id_ky=mb.id_ky AND tr.id=cs.id AND tr.id_donasi='$id' ORDER BY id_donasi DESC")->result();
        $data['title'] = 'Donasi Proses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/detail_proses', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cetak()
    {
        $user = $this->session->userdata('id');

        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_kayu mb, user cs WHERE tr.id_ky=mb.id_ky AND tr.id=cs.id AND cs.id='$user' ORDER BY id_donasi DESC")->result();
        $this->load->view('toko/print_berhasil', $data);
    }
}
