<?php

class Beranda_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rental_model');
        $this->load->model('model_kayu');
    }
    // Beranda ini untuk menampilkan view di LANDING-PAGE hasil UPLOAD user DONATUR
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kayu']  = $this->db->query("SELECT * FROM tb_kayu l JOIN user cs ON l.id_user = cs.id
        JOIN limbah im ON l.id_limbah = im.id_limbah ORDER BY id_ky DESC")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/topbar', $data);
        // $this->load->view('donatur/landing_page/lp_konten', $data);
        $this->load->view('donatur/beranda', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $where = array('id_ky' => $id);
        // $data['kayu'] = $this->model_kayu->detail_kayu($where, 'tb_kayu')->result();
        $where = array('id_ky' => $id);
        $data['kayu'] = $this->model_kayu->edit_kayu($where, 'tb_kayu')->result();
        $data['kayu'] = $this->model_kayu->ambil_id_kayu1($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('donatur/beranda_detail_kayu', $data);
        $this->load->view('templates/footer', $data);
    }


    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $filePembayaran = $this->Rental_model->downloadPembayaran($id);
        $file = 'assets/img/upload/' . $filePembayaran['bukti_cekkayu'];
        force_download($file, NULL);
    }
}
