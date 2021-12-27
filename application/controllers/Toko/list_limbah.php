<?php
defined('BASEPATH') or exit('No direct script access allowed');

class list_limbah extends CI_Controller
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
        $this->load->library('cart');
        $this->load->model('Rental_model');
    }
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->model_limbah->view();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/list_limbah', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_donasi($id)
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->model_limbah->ambil_id_donasi($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/tambah_donasi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_donasi_aksi()
    {
        $id                              = $this->session->userdata('id');
        $id_ky                           = $this->input->post('id_ky');
        $id_user                           = $this->input->post('id_user');
        $names                           = $this->input->post('names');
        $emails                           = $this->input->post('emails');
        $nomor_telepons                           = $this->input->post('nomor_telepons');
        $nama_limbah                           = $this->input->post('nama_limbah');
        $data = array(
            'id'                 => $id,
            'id_ky'              => $id_ky,
            'id_user'              => $id_user,
            'names'                 => $names,
            'emails'                 => $emails,
            'nomor_telepons'                 => $nomor_telepons,
            'nama_limbah'                 => $nama_limbah,
            'tgl_donasi'        => date('Y-m-d H:i:s'),
            'status_donasi'         => '2'
        );
        $this->Rental_model->insert_data($data, 'tb_transaksi');

        $status = array(
            'status' => '0'
        );
        $id = array(
            'id_ky' => $id_ky
        );

        $this->Rental_model->update_data('tb_kayu', $status, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        donasi limbah kayu sedang diajukan, harap tunggu kabar selanjutnya dari si donatur!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('toko/donasi_proses');
    }

    // public function tambah_ke_keranjang($id)
    // {
    //     $barang = $this->model_limbah->find($id);

    //     $data = array(
    //         'id'      => $barang->id_ky,
    //         'name' => $barang->jenis_kayu,
    //         'price' => $barang->ukuran_kayu,
    //         'qty'     => 1
    //     );
    //     $this->cart->insert($data);
    //     redirect('toko/list_limbah');
    // }

    // public function detail_keranjang()
    // {
    //     $dariDB = $this->model_limbah->cekkodebarang();
    //     // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
    //     $nourut = substr($dariDB, 3, 4);
    //     $kodeBarangSekarang = $nourut + 1;
    //     $data = array('kode_transaksi' => $kodeBarangSekarang);
    //     $data['title'] = 'Donasi Yang Diambil';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/user_sidebar', $data);
    //     $this->load->view('templates/toko_topbar', $data);
    //     $this->load->view('toko/detail_keranjang', $data);
    //     $this->load->view('templates/footer', $data);
    // }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        $pesan = $this->session->set_flashdata('success', 'Data Belanjaan Behasil Di Hapus');
        redirect('toko/list_limbah', $pesan);
    }

    public function proses_pesanan()
    {
        $id_user = $this->session->userdata('id');
        $kd_transaksi = $this->input->post('kode_transaksi');
        if ($this->cart->contents() == null) {
            $pesan = $this->session->set_flashdata('success', 'Pilih Limbah Kayu Terlebih Dahulu');
            redirect('toko/list_limbah/', $pesan);
        } else {
            $is_processed = $this->model_limbah->index($id_user, $kd_transaksi);
            if ($is_processed) {
                $this->cart->destroy();
                $pesan = $this->session->set_flashdata('success', 'Pesanan Anda Sedang di Proses');
                redirect('toko/list_limbah', $pesan);
            } else {
                $pesan = $this->session->set_flashdata('success', 'Gagal Memproses Pesanan Anda');
                redirect('toko/list_limbah', $pesan);
            }
        }
    }


    public function detail($id_brg)
    {
        $data['kayu'] = $this->model_limbah->detail_brg($id_brg);
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/detail_barang', $data);
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
