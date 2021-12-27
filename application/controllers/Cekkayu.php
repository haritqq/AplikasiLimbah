<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cekkayu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Kriteria_model');
    $this->load->model('Subkriteria_model');
    $this->load->model('Limbah_model');
    $this->load->model('NilaiGap_model');
    $this->load->model('Penilaian_model');
    $this->load->model('Rental_model');
  }

  public function limbah()
  {
    $data['title'] = 'Isi Limbah Kayu';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $user = $this->session->userdata('id');
    $data['limbah']  = $this->db->query("SELECT * FROM limbah l JOIN user cs ON l.id = cs.id AND cs.id='$user' ORDER BY id_limbah DESC")->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('cekkayu/limbah/limbah', $data);
    $this->load->view('templates/footer');
  }

  public function cetak_limbah()
  {
    $data['title'] = 'Isi Limbah Kayu';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $user = $this->session->userdata('id');
    $data['limbah']  = $this->db->query("SELECT * FROM limbah l JOIN user cs ON l.id = cs.id AND cs.id='$user' ORDER BY id_limbah DESC")->result_array();
    $this->load->view('cekkayu/limbah/print_berhasil_limbah', $data);
  }


  public function tambahlimbah()
  {
    $data['title'] = 'Isi Limbah Kayu';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama_limbah', 'Nama Limbah', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('cekkayu/limbah/tambahlimbah', $data);
      $this->load->view('templates/footer');
    } else {

      $this->Limbah_model->tambahDataLimbah();
      $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> data berhasil dikirim!</div>');
      redirect('cekkayu/tambahpenilaian');
    }
  }

  public function editlimbah($id_limbah)
  {
    $data['title'] = 'Isi Limbah Kayu';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['limbah'] = $this->Limbah_model->getLimbahById($id_limbah);
    $limbah = $this->Limbah_model->getLimbahById($id_limbah);

    $this->form_validation->set_rules('nama_limbah', 'Nama Limbah', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('cekkayu/limbah/editlimbah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Limbah_model->ubahDataLimbah($limbah, $id_limbah);

      $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Data berhasil diubah!</div>');
      redirect('cekkayu/limbah');
    }
  }

  public function hapuslimbah()
  {
    $this->Limbah_model->hapusDataLimbah();
    $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> Data berhasil dihapus!</div>');
    redirect('cekkayu/limbah');
  }

  public function hapuslimbahnilai()
  {
    $this->Limbah_model->hapusDataLimbahNilai();
    $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> Data berhasil dihapus!</div>');
    redirect('cekkayu/penilaian');
  }

  public function penilaian()
  {
    $data['title'] = 'Hasil Cek Limbah Kayu';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['penilaian'] = $this->Penilaian_model->getAllPenilaian();
    $data['hitung'] = $this->Penilaian_model->getAllHitung();
    $data['nilaiakhir'] = $this->Penilaian_model->getAllNilaiAkhir();
    $data['nilai'] = [
      ["id_nilai" => 1, "nama_nilai"],
      ["id_nilai" => 2, "nama_nilai"],
      ["id_nilai" => 3, "nama_nilai"],
      ["id_nilai" => 4, "nama_nilai"],
      ["id_nilai" => 5, "nama_nilai"]
    ];
    // echo '<pre>';
    // var_dump($data['nilai']);
    // echo '</pre>';
    // die;
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('cekkayu/penilaian/penilaian', $data);
    $this->load->view('templates/footer');
  }

  public function cetak_detaildonasirangking($id)
  {
    $data['title'] = 'Penilaian';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['penilaians'] = $this->Penilaian_model->getAllPenilaian();
    $data['hitung'] = $this->Penilaian_model->getAllHitung();
    $data['nilaiakhir'] = $this->Penilaian_model->getAllNilaiAkhir();
    $data['nilai'] = [
      ["id_nilai" => 1, "nama_nilai"],
      ["id_nilai" => 2, "nama_nilai"],
      ["id_nilai" => 3, "nama_nilai"],
      ["id_nilai" => 4, "nama_nilai"],
      ["id_nilai" => 5, "nama_nilai"]
    ];
    $user = $this->session->userdata('id');
    $data['limbah'] = $this->db->query("SELECT rangking.id_rangking, limbah.nama_limbah, limbah.id_limbah, rangking.nilai_rangking, user.id FROM rangking JOIN limbah ON rangking.id_limbah = limbah.id_limbah JOIN user ON rangking.id = user.id AND user.id='$user' AND rangking.id_rangking='$id' ORDER BY id_rangking DESC")->result_array();

    $data['penilaian'] = $this->db->query("SELECT penilaian.id_penilaian, limbah.nama_limbah, kriteria.nama_kriteria, subkriteria.nama_subkriteria, subkriteria.faktor, nilai_subkriteria,  user.name FROM penilaian join limbah ON penilaian.id_limbah = limbah.id_limbah join subkriteria on penilaian.id_subkriteria = subkriteria.id_subkriteria join kriteria on penilaian.id_kriteria = kriteria.id_kriteria join user on penilaian.id = user.id
    AND user.id='$user' AND penilaian.id_penilaian='$id' ORDER BY id_penilaian DESC")->result_array();

    $this->load->view('cekkayu/penilaian/print_berhasil_penilaian', $data);
  }


  public function tambahpenilaian()
  {
    $data['title'] = 'Tambah Penilaian';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('id_limbah', 'Limbah', 'required');

    $data['penilaian'] = $this->db->get('penilaian')->result_array();
    $data['limbah'] = $this->Limbah_model->getAllLimbahAdded();
    $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
    $data['subkriteria'] = $this->Subkriteria_model->getAllSubkriteria();
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('cekkayu/penilaian/tambahpenilaian', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->Penilaian_model->tambahDataPenilaian();
      $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Limbah Kayu berhasil di cek dan berikut hasilnya!</div>');
      redirect('cekkayu/penilaian');
    }
  }

  public function editpenilaian()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->Penilaian_model->editDataPenilaian();
    $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Data berhasil diubah!</div>');
    redirect('cekkayu/penilaian');
  }

  public function detail_hasil()
  {
    $data['title'] = 'Penilaian';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['penilaian'] = $this->Penilaian_model->getAllPenilaian();
    $data['hitung'] = $this->Penilaian_model->getAllHitung();
    $data['nilaiakhir'] = $this->Penilaian_model->getAllNilaiAkhir();
    $data['nilai'] = [
      ["id_nilai" => 1, "nama_nilai"],
      ["id_nilai" => 2, "nama_nilai"],
      ["id_nilai" => 3, "nama_nilai"],
      ["id_nilai" => 4, "nama_nilai"],
      ["id_nilai" => 5, "nama_nilai"]
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('cekkayu/penilaian/detail_hasil', $data);
    $this->load->view('templates/footer', $data);
  }
  public function lihat_perhitungan()
  {
    $data['title'] = 'Hasil Cek Limbah Kayu';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['penilaian'] = $this->Penilaian_model->getAllPenilaian();
    $data['hitung'] = $this->Penilaian_model->getAllHitung();
    $data['nilaiakhir'] = $this->Penilaian_model->getAllNilaiAkhir();
    $data['nilai'] = [
      ["id_nilai" => 1, "nama_nilai"],
      ["id_nilai" => 2, "nama_nilai"],
      ["id_nilai" => 3, "nama_nilai"],
      ["id_nilai" => 4, "nama_nilai"],
      ["id_nilai" => 5, "nama_nilai"]
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('cekkayu/penilaian/lihat_perhitungan', $data);
    $this->load->view('templates/footer', $data);
  }
}
