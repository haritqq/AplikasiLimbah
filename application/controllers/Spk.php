<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spk extends CI_Controller
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
    public function kriteria()
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('spk/kriteria/kriteria', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_kriteria()
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        $this->load->view('spk/kriteria/print_berhasil_kriteria', $data);
    }

    public function tambahkriteria()
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'required|trim');
        $this->form_validation->set_rules('nilai_kriteria', 'Nilai Kriteria', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('spk/kriteria/tambahkriteria', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Kriteria_model->tambahDataKriteria();
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Data berhasil ditambahkan!</div>');
            redirect('spk/kriteria');
        }
    }

    public function editkriteria($id_kriteria)
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kriteria'] = $this->Kriteria_model->getKriteriaById($id_kriteria);
        $kriteria = $this->Kriteria_model->getKriteriaById($id_kriteria);

        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'required|trim');
        $this->form_validation->set_rules('nilai_kriteria', 'Nilai Kriteria', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('spk/kriteria/editkriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->ubahDataKriteria($kriteria, $id_kriteria);

            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Data berhasil diubah!</div>');
            redirect('spk/kriteria');
        }
    }

    public function hapusKriteria()
    {
        $this->Kriteria_model->hapusDataKriteria();
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> Data berhasil dihapus!</div>');
        redirect('spk/kriteria');
    }

    public function subkriteria()
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['subkriteria'] = $this->Subkriteria_model->getAllSubkriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('spk/subkriteria/subkriteria', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_subkriteria()
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['subkriteria'] = $this->Subkriteria_model->getAllSubkriteria();

        $this->load->view('spk/subkriteria/print_berhasil_subkriteria', $data);
    }


    public function tambahsubkriteria()
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_kriteria', 'Kriteria', 'required');
        $this->form_validation->set_rules('nama_subkriteria', 'Nama Subkriteria', 'required|trim');
        $this->form_validation->set_rules('nilai_subkriteria', 'Nilai Subkriteria', 'required|trim');
        $data['subkriteria'] = $this->db->get('subkriteria')->result_array();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('spk/subkriteria/tambahsubkriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Subkriteria_model->tambahDataSubkriteria();
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Data berhasil ditambahkan!</div>');
            redirect('spk/subkriteria');
        }
    }

    public function editsubkriteria($id)
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $id_subkriteria = $this->input->post('id');
        $where = array('id_subkriteria' => $id);
        $data['subkriteria'] = $this->db->query("SELECT * from subkriteria mb, kriteria tp WHERE mb.id_kriteria = tp.id_kriteria AND mb.id_subkriteria='$id'")->result();
        $data['kriteria'] = $this->Rental_model->get_data('kriteria')->result();
        $data['faktor'] = ['core', 'secondary'];
        $data['nilai_subkriteria'] = [3, 2, 1];

        $this->form_validation->set_rules('id_kriteria', 'ID Kriteria', 'required');
        $this->form_validation->set_rules('nama_subkriteria', 'Nama Subkriteria', 'required');
        $this->form_validation->set_rules('faktor', 'Faktor', 'required');
        $this->form_validation->set_rules('nilai_subkriteria', 'Nilai Subkriteria', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('spk/subkriteria/editsubkriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $id           = $this->input->post('id_subkriteria');
            $id_kriteria    = $this->input->post('id_kriteria');
            $nama_subkriteria         = $this->input->post('nama_subkriteria');
            $faktor      = $this->input->post('faktor');
            $nilai_subkriteria        = $this->input->post('nilai_subkriteria');
            $data = array(
                'id_kriteria' => $id_kriteria,
                'nama_subkriteria' => $nama_subkriteria,
                'faktor' => $faktor,
                'nilai_subkriteria' => $nilai_subkriteria,
            );
            $where = array(
                'id_subkriteria' => $id
            );
            $this->Rental_model->update_data('subkriteria', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil diupdate
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
            redirect('spk/subkriteria');
        }
    }

    public function hapussubkriteria()
    {

        $this->Subkriteria_model->hapusDataSubkriteria();
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> Data berhasil dihapus!</div>');
        redirect('spk/subkriteria');
    }

    public function nilaigap()
    {
        $data['title'] = 'Nilai GAP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nilaigap'] = $this->NilaiGap_model->getAllNilaiGap();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('spk/nilaigap/nilaigap', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_nilaigap()
    {
        $data['title'] = 'Nilai GAP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nilaigap'] = $this->NilaiGap_model->getAllNilaiGap();

        $this->load->view('spk/nilaigap/print_berhasil_nilaigap', $data);
    }
}
