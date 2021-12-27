<?php

class Beranda_toko extends CI_Controller
{
    // Beranda ini untuk menampilkan view di LANDING-PAGE hasil UPLOAD user DONATUR
    // public function index()
    // {
    //     $data['title'] = 'Beranda';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['kayu'] = $this->model_kayu->tampil_data()->result();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/user_sidebar', $data);
    //     $this->load->view('templates/toko_topbar', $data);
    //     $this->load->view('toko/beranda', $data);
    //     $this->load->view('templates/footer');
    // }

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
    }

    public function index()
    {
        $data['title'] = 'List Limbah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->model_limbah->view();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/beranda', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_limbah->find($id);

        $data = array(
            'id'      => $barang->id_ky,
            'name' => $barang->jenis_kayu,
            'price' => $barang->ukuran_kayu,
            'qty'     => 1
        );
        $this->cart->insert($data);
        redirect('toko/beranda');
    }

    public function detail_keranjang()
    {
        $dariDB = $this->model_limbah->cekkodebarang();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3, 4);
        $kodeBarangSekarang = $nourut + 1;
        $data = array('kode_transaksi' => $kodeBarangSekarang);
        $data['title'] = 'Keranjang Belanja';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/detail_keranjang', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        $pesan = $this->session->set_flashdata('success', 'Data Belanjaan Behasil Di Hapus');
        redirect('toko/beranda', $pesan);
    }

    public function proses_pesanan()
    {
        $id_user = $this->session->userdata('id');
        $kd_transaksi = $this->input->post('kode_transaksi');
        if ($this->cart->contents() == null) {
            $pesan = $this->session->set_flashdata('success', 'Pilih Limbah Kayu Terlebih Dahulu');
            redirect('toko/beranda/', $pesan);
        } else {
            $is_processed = $this->model_limbah->index($id_user, $kd_transaksi);
            if ($is_processed) {
                $this->cart->destroy();
                $pesan = $this->session->set_flashdata('success', 'Pesanan Anda Sedang di Proses');
                redirect('toko/beranda', $pesan);
            } else {
                $pesan = $this->session->set_flashdata('success', 'Gagal Memproses Pesanan Anda');
                redirect('toko/beranda', $pesan);
            }
        }
    }


    public function detail($id_brg)
    {
        $data['kayu'] = $this->model_limbah->detail_brg($id_brg);
        $data['title'] = 'Detail Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/toko_topbar', $data);
        $this->load->view('toko/detail_barang', $data);
        $this->load->view('templates/footer', $data);
    }
}

    // public function ambil($id)
    // {
    //     $kayu = $this->model_kayu->find($id);

    //     $data = array(
    //         'id'      => $kayu->id_ky,
    //         'qty'     => 1,
    //         'price'   => $kayu->ukuran_kayu,
    //         'name'    => $kayu->jenis_kayu
    //     );

    //     $this->cart->insert($data);
    //     redirect('dashboard');
    // }

    // public function detail_keranjang()
    // {
    //     $this->load->view('templates/user_header');
    //     $this->load->view('templates/user_sidebar');
    //     $this->load->view('keranjang');
    //     $this->load->view('templates/user_footer');
    // }
