<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karya_toko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '3') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/index');
        }
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $data['title'] = 'Karya Toko';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['karya'] = $this->model_karya->tampil_data()->result();
        $user = $this->session->userdata('id');
        $data['karya']  = $this->db->query("SELECT * FROM tb_karya l JOIN user cs ON l.id = cs.id AND cs.id='$user' ORDER BY id_kry DESC")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('toko/karya_toko', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_karya()
    {
        $id                              = $this->session->userdata('id');
        $nama     = $this->input->post('nama');
        $kegunaan    = $this->input->post('kegunaan');
        $keterangan     = $this->input->post('keterangan');

        // klo gambar gk muncul lagi di dashboard coba hapus name 
        $foto_karya      = $_FILES['foto_karya'];
        if ($foto_karya = '') {
        } else {
            $config['upload_path'] = './assets/img/karya';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_karya')) {
                echo "Gambar gagal diupload!";
            } else {
                $foto_karya = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id'                 => $id,
            'nama' => $nama,
            'kegunaan' => $kegunaan,
            'keterangan' => $keterangan,
            'foto_karya' => $foto_karya,

            // 'id_toko' => $id
        );

        $this->model_karya->tambah_karya($data, 'tb_karya');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil ditambahkan</div>');
        redirect('toko/karya_toko/index');
    }

    public function edit_karya($id)
    {
        $data['title'] = 'Edit Karya';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['karya'] = $this->model_kayu->getKaryaById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kegunaan', 'Kegunaan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('toko/karya_toko', $data);
            $this->load->view('templates/footer');
        } else {
            $nama     = $this->input->post('nama');
            $kegunaan    = $this->input->post('kegunaan');
            $keterangan     = $this->input->post('keterangan');
            $foto_karya      = $_FILES['foto_karya']['name'];
            if ($foto_karya) {
                $config['upload_path'] = './assets/img/karya';
                $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto_karya')) {
                    $old_image = $data['karya']['foto_karya'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/karya/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto_karya', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('nama', $nama);
            $this->db->set('kegunaan', $kegunaan);
            $this->db->set('keterangan', $keterangan);
            $this->db->where('id_kry', $id);
            $this->db->update('tb_karya');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil diubah</div>');
            redirect('toko/karya_toko/index');
        }
    }


    public function hapus($id)
    {
        $where = array('id_kry' => $id);
        $this->model_kayu->hapus_data($where, 'tb_karya');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil dihapus</div>');
        redirect('toko/karya_toko/index');
    }
}
