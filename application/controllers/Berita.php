<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Berita_model');
    }

    public function kelolaberita()
    {
        $data['title'] = 'Kelola Berita';
        $data['berita']  = $this->Berita_model->getAllBerita();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Berita/kelolaberita/kelolaberita', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_berita()
    {
        $data['title'] = 'Kelola Berita';
        $data['berita']  = $this->Berita_model->getAllBerita();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('Berita/print_berhasil_berita', $data);
    }


    public function tambah_berita()
    {

        $gambar = $_FILES['gambar'];
        if ($gambar = '') {
        } else {
            $config['upload_path']    = './assets/gambar_berita/';
            $config['allowed_types']  = 'jpg|png|gif|jpeg|JPEG';
            $config['max_size']      = '5000';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload gagal, periksa kembali foto yang anda upload!</div>');
                redirect('berita/kelolaberita');
            }
        }
        $data = [
            'judul_berita'  => htmlspecialchars($this->input->post('judul_berita', true)),
            'keterangan'   => $this->input->post('keterangan', true),
            'pengirim'     => htmlspecialchars($this->input->post('pengirim', true)),
            'date_created'  => time(),
            'gambar'    => $gambar
        ];

        $this->db->insert('tb_berita', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil menambahkan berita baru</div>');
        redirect('berita/kelolaberita');
    }

    public function edit_berita($id)
    {
        $data['title'] = 'Edit Berita';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Berita_model->getBeritaById($id);
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('berita/kelolaberita/kelolaberita', $data);
            $this->load->view('templates/footer');
        } else {
            $judul_berita = $this->input->post('judul_berita');
            $keterangan = $this->input->post('keterangan');
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './assets/gambar_berita/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['berita']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/gambar_berita/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('judul_berita', $judul_berita);
            $this->db->set('keterangan', $keterangan);
            $this->db->where('id', $id);
            $this->db->update('tb_berita');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! kamu berhasil mengedit berita</div>');
            redirect('berita/kelolaberita');
        }
    }

    public function detail_berita($id)
    {
        $data['title'] = 'Kelola Berita';
        $data['berita'] = $this->Berita_model->getBeritaById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Berita/kelolaberita/detail', $data);
        $this->load->view('templates/footer');
    }


    public function hapus_berita()
    {
        $this->Berita_model->hapusDataBerita();
        $this->session->set_flashdata('message', '<div class="alert
      alert-success" role="alert"> Data berhasil dihapus!</div>');
        redirect('berita/kelolaberita');
    }
}
