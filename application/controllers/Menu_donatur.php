<?php
class Menu_donatur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/index');
        }
        $this->load->model('Rental_model');
        $this->load->model('model_kayu');
        $this->load->model('Limbah_model');
    }
    public function index()
    {
        $data['title'] = 'Data Donasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kayu'] = $this->model_kayu->tampil_data()->result();
        $user = $this->session->userdata('id');
        $data['kayu']  = $this->db->query("SELECT * FROM tb_kayu l JOIN user cs ON l.id_user = cs.id
        JOIN limbah im ON l.id_limbah = im.id_limbah AND cs.id='$user' ORDER BY id_ky DESC")->result_array();
        $data['limbah']  = $this->db->query("SELECT * FROM limbah l JOIN user cs ON l.id = cs.id AND cs.id='$user' ORDER BY id_limbah DESC")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('donatur/data_kayu', $data);
        $this->load->view('templates/footer');
    }

    public function detail_hasil()
    {
        $data['title'] = 'Data Donasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kayu'] = $this->model_kayu->tampil_data()->result();
        $user = $this->session->userdata('id');
        $data['kayu']  = $this->db->query("SELECT * FROM tb_kayu l JOIN user cs ON l.id_user = cs.id AND cs.id='$user' ORDER BY id_ky DESC")->result_array();
        $data['limbah'] = $this->Limbah_model->getAllLimbah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('donatur/detail_hasil', $data);
        $this->load->view('templates/footer');
    }


    public function tambah_aksi()
    {
        $id_limbah    = $this->input->post('id_limbah');
        $jumlah_kayu    = $this->input->post('jumlah_kayu');
        $ukuran_kayu    = $this->input->post('ukuran_kayu');
        $bentuk_kayu    = $this->input->post('bentuk_kayu');
        $keterangan     = $this->input->post('keterangan');
        $status         = $this->input->post('status');
        // klo gambar gk muncul lagi di dashboard coba hapus name 
        $foto_kayu      = $_FILES['foto_kayu']['name'];
        if ($foto_kayu = '') {
        } else {
            $config['upload_path'] = './assets/img/upload';
            $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_kayu')) {
                echo "Gambar gagal diupload!";
            } else {
                $foto_kayu = $this->upload->data('file_name');
            }
        }
        $bukti_cekkayu      = $_FILES['bukti_cekkayu']['name'];
        if ($bukti_cekkayu = '') {
        } else {
            $config['upload_path'] = './assets/img/upload';
            $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_cekkayu')) {
                echo "Gambar gagal diupload!";
            } else {
                $bukti_cekkayu = $this->upload->data('file_name');
            }
        }
        $data = array(
            'id_limbah' => $this->input->post('id_limbah', true),
            'jumlah_kayu' => $jumlah_kayu,
            'ukuran_kayu' => $ukuran_kayu,
            'bentuk_kayu' => $bentuk_kayu,
            'keterangan' => $keterangan,
            'foto_kayu' => $foto_kayu,
            'bukti_cekkayu' => $bukti_cekkayu,
            'status'        => $status,
            'id_user' => $this->session->userdata('id'),
        );

        $this->model_kayu->tambah_kayu($data, 'tb_kayu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil dikirim</div>');
        redirect('menu_donatur/index');
    }

    public function detail($id)
    {
        $data['title'] = 'Data Donasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $where = array('id_ky' => $id);
        // $data['kayu'] = $this->model_kayu->detail_kayu($where, 'tb_kayu')->result();
        // $where = array('id_ky' => $id);
        // $data['kayu'] = $this->model_kayu->edit_kayu($where, 'tb_kayu')->result();
        $data['kayu'] = $this->model_kayu->ambil_id_kayu($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('donatur/detail_kayu', $data);
        $this->load->view('templates/footer', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Kayu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_ky' => $id);
        $data['kayu'] = $this->model_kayu->edit_kayu($where, 'tb_kayu')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('donatur/edit_kayu', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cetak()
    {
        $user = $this->session->userdata('id');
        $data['kayu']  = $this->db->query("SELECT * FROM tb_kayu l JOIN user cs ON l.id_user = cs.id
        JOIN limbah im ON l.id_limbah = im.id_limbah AND cs.id='$user' ORDER BY id_ky DESC")->result_array();
        $this->load->view('donatur/print_berhasil', $data);
    }

    public function edit_kayu($id)
    {
        $data['title'] = 'Edit Kayu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $user = $this->session->userdata('id');
        $data['kayu'] = $this->model_kayu->getKayuById($id);
        $data['limbah']  = $this->db->query("SELECT * FROM limbah l JOIN user cs ON l.id = cs.id AND cs.id='$user' ORDER BY id_limbah DESC")->result_array();
        $this->form_validation->set_rules('id_limbah', 'ID Limbah', 'required');
        $this->form_validation->set_rules('jumlah_kayu', 'Jumlah Kayu', 'required');
        $this->form_validation->set_rules('ukuran_kayu', 'Ukuran Kayu', 'required');
        $this->form_validation->set_rules('bentuk_kayu', 'Bentuk Kayu', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('donatur/data_kayu', $data);
            $this->load->view('templates/footer');
        } else {
            $id_limbah = $this->input->post('id_limbah');
            $jumlah_kayu = $this->input->post('jumlah_kayu');
            $ukuran_kayu = $this->input->post('ukuran_kayu');
            $bentuk_kayu = $this->input->post('bentuk_kayu');
            $keterangan = $this->input->post('keterangan');
            $status       = $this->input->post('status');
            $foto_kayu      = $_FILES['foto_kayu']['name'];
            if ($foto_kayu) {
                $config['upload_path'] = './assets/img/upload';
                $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto_kayu')) {
                    $old_image = $data['kayu']['foto_kayu'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/upload/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto_kayu', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $bukti_cekkayu      = $_FILES['bukti_cekkayu']['name'];
            if ($bukti_cekkayu) {
                $config['upload_path'] = './assets/img/upload';
                $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('bukti_cekkayu')) {
                    $old_image = $data['kayu']['bukti_cekkayu'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/upload/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('bukti_cekkayu', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('id_limbah', $id_limbah);
            $this->db->set('ukuran_kayu', $ukuran_kayu);
            $this->db->set('bentuk_kayu', $bentuk_kayu);
            $this->db->set('jumlah_kayu', $jumlah_kayu);
            $this->db->set('keterangan', $keterangan);
            $this->db->set('status', $status);
            $this->db->where('id_ky', $id);
            $this->db->update('tb_kayu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil diubah</div>');
            redirect('menu_donatur/index');
        }
    }

    public function hapus($id)
    {
        $where = array('id_ky' => $id);
        $this->model_kayu->hapus_data($where, 'tb_kayu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil dihapus</div>');
        redirect('menu_donatur/index');
    }

    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $filePembayaran = $this->Rental_model->downloadPembayaran($id);
        $file = 'assets/img/upload/' . $filePembayaran['bukti_cekkayu'];
        force_download($file, NULL);
    }
}
