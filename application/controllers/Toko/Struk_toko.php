<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Struk_toko extends CI_Controller
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
            $this->load->library('cetak_pdf');
        }
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        $data['title'] = 'Struk';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kayu'] = $this->model_limbah->status_3($id)->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/struk_toko',$data);
        $this->load->view('templates/footer', $data);
    }

    public function detail($id)
	{
        $data['kayu1'] = $this->model_limbah->detail_tanggal($id);
        $data['kayu'] = $this->model_limbah->detail($id);
        $data['title'] = 'Detail Limbah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/detail_struk',$data);
        $this->load->view('templates/footer', $data);
	}

    public function cetak($id){
        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename = "Struk Bukti Penerimaan Limbah Kayu";
        $data['kayu1'] = $this->model_limbah->detail_tanggal($id);
        $data['kayu'] = $this->model_limbah->detail($id);
		$this->load->view('toko/print_berhasil', $data);


	}
}
