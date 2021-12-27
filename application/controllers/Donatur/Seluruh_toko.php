<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seluruh_toko extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Lihat Seluruh Toko';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['geo'] = $this->rental_model->get_data('geografis')->result();
        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);

        // $this->load->view('templates_customer/header_lokasi');
        $this->load->view('donatur/lokasi', $data);
        // $this->load->view('templates_customer/footer');

        $this->load->view('templates/footer', $data);
    }
}
