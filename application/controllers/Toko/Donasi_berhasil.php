<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_berhasil extends CI_Controller
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
    $user = $this->session->userdata('id');
    $data['title'] = 'Donasi Berhasil';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr,  tb_kayu mb, user cs WHERE tr.id_ky=mb.id_ky AND tr.id=cs.id AND tr.id_user=mb.id_user AND mb.id_user='$user' ORDER BY id_donasi DESC ")->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('toko/donasi_berhasil', $data);
    $this->load->view('templates/footer', $data);
  }

  public function detail($id)
  {
    $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_kayu mb, user cs WHERE tr.id_ky=mb.id_ky AND tr.id=cs.id AND tr.id_donasi='$id' ORDER BY id_donasi DESC")->result();
    $data['title'] = 'Detail Proses';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('toko/detail_proses', $data);
    $this->load->view('templates/footer', $data);
  }

  // function gagal($id)
  // {
  //     $status = 0;
  //     $data = array(
  //         'status_donasi' => $status
  //     );
  //     $where = array(
  //         'id_donasi' => $id
  //     );
  //     $this->model_limbah->gagal_data($where, $data, 'tb_transaksi');
  //     $pesan = $this->session->set_flashdata('success', 'Pesanan DI Batalkan');
  //     redirect('donatur/donatur_berhasil', $pesan);
  // }

  // function proses_pengambilan($id)
  // {
  //     $status = 1;
  //     $data = array(
  //         'status_donasi' => $status
  //     );
  //     $where = array(
  //         'id_donasi' => $id
  //     );
  //     $this->model_limbah->proses_data($where, $data, 'tb_transaksi');
  //     $pesan = $this->session->set_flashdata('success', 'Limbah Kayu Sedang Dalam Proses Pengambilan');
  //     redirect('donatur/donatur_berhasil', $pesan);
  // }

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
    redirect('toko/donatur_berhasil', $pesan);
  }
}
