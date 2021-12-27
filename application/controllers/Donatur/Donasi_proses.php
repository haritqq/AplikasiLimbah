<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_proses extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_limbah');
        if ($this->session->userdata('role_id') != '2') {
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
        $user = $this->session->userdata('id');
        $data['title'] = 'Donasi Proses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr JOIN tb_kayu mb ON tr.id_ky=mb.id_ky JOIN 
        user cs ON tr.id=cs.id AND tr.id_user=mb.id_user AND mb.id_user='$user' ORDER BY id_donasi DESC ")->result();
        // $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr,  tb_kayu mb, user cs WHERE tr.id_ky=mb.id_ky AND tr.id=cs.id AND tr.id_user=mb.id_user AND mb.id_user='$user' ORDER BY id_donasi DESC ")->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('donatur/donasi_proses', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cetak_donasiproses()
    {
        $user = $this->session->userdata('id');
        $data['title'] = 'Donasi Proses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr JOIN tb_kayu mb ON tr.id_ky=mb.id_ky JOIN 
        user cs ON tr.id=cs.id AND tr.id_user=mb.id_user AND mb.id_user='$user' ORDER BY id_donasi DESC ")->result();
        $this->load->view('donatur/print_berhasil_donaturproses', $data);
    }

    public function detail($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr JOIN tb_kayu mb ON tr.id_ky=mb.id_ky JOIN 
        user cs ON tr.id=cs.id AND tr.id_donasi='$id' ORDER BY id_donasi DESC")->result();
        // $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_kayu mb, user cs WHERE tr.id_ky=mb.id_ky AND tr.id=cs.id AND tr.id_donasi='$id' ORDER BY id_donasi DESC")->result();
        $data['title'] = 'Donasi Proses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('donatur/detail_proses', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cetak_detaildonasiproses($id)
    {
        $user = $this->session->userdata('id');
        $data['title'] = 'Donasi Proses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr JOIN tb_kayu mb ON tr.id_ky=mb.id_ky JOIN 
        user cs ON tr.id=cs.id AND tr.id_donasi='$id' ORDER BY id_donasi DESC")->result();
        $this->load->view('donatur/print_berhasil_detaildonaturproses', $data);
    }

    function gagal($id)
    {
        $status = 0;
        $data = array(
            'status_donasi' => $status
        );
        $where = array(
            'id_donasi' => $id
        );
        $this->model_limbah->gagal_data($where, $data, 'tb_transaksi');
        $pesan = $this->session->set_flashdata('success', 'Proses Donasi Di Batalkan');
        redirect('donatur/donasi_proses', $pesan);
    }

    function proses_pengambilan($id)
    {
        $status = 1;
        $data = array(
            'status_donasi' => $status
        );
        $where = array(
            'id_donasi' => $id
        );
        $this->model_limbah->proses_data($where, $data, 'tb_transaksi');
        $pesan = $this->session->set_flashdata('success', 'Limbah Kayu Sedang Dalam Proses Pengambilan');
        redirect('donatur/donasi_proses', $pesan);
    }

    function berhasil($id)
    {
        $status = 3;
        $data = array(
            'status_donasi' => $status
        );
        $where = array(
            'id_donasi' => $id
        );
        $this->model_limbah->berhasil_data($where, $data, 'tb_transaksi');
        $pesan = $this->session->set_flashdata('success', 'Limbah Kayu Sudah Diambil');
        redirect('donatur/donasi_proses', $pesan);
    }
}
