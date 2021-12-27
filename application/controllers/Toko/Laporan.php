<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
    $dari = $this->input->post('dari');
    $sampai = $this->input->post('sampai');
    $this->_rules();
    $user = $this->session->userdata('id');
    $data['title'] = 'Laporan';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('toko/laporan', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data['transaksis'] = $this->db->query("SELECT * FROM tb_transaksi tr JOIN tb_kayu mb ON tr.id_ky=mb.id_ky JOIN 
        user cs ON tr.id=cs.id AND tr.id_user=mb.id_user AND tr.id='$user' AND date(tgl_donasi) >='$dari' AND date(tgl_donasi) <='$sampai'")->result();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('toko/tampilkan_laporan', $data);
      $this->load->view('templates/footer', $data);
    }
  }

  // public function cetak_laporan()
  // {
  //   $dari = $this->input->post('dari');
  //   $sampai = $this->input->post('sampai');
  //   $this->_rules();
  //   $user = $this->session->userdata('id');
  //   $data['title'] = 'Laporan';
  //   $data['user'] = $this->db->get_where('user', ['email' =>
  //   $this->session->userdata('email')])->row_array();
  //   $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr JOIN tb_kayu mb ON tr.id_ky=mb.id_ky JOIN 
  //   user cs ON tr.id=cs.id AND tr.id_user=mb.id_user AND mb.id_user='$user' AND date(tgl_donasi) >='$dari' AND date(tgl_donasi) <='$sampai'")->result();
  //   $this->load->view('toko/print_laporan', $data);
  // }

  public function _rules()
  {
    $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
    $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
  }
}
