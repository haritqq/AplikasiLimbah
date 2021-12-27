<?php

class Model_limbah extends CI_Model
{
    //KODE TRANSAKSI OTOMATIS
    public function cekkodebarang()
    {
        $query = $this->db->query("SELECT MAX(kode_transaksi) as kode_transaksi from tb_order");
        $hasil = $query->row();
        return $hasil->kode_transaksi;
    }
    //

    //LIST LIMBAH DAN CART
    public function view()
    {
        // Load librari paginationnya        
        $this->load->library('pagination');
        // Query untuk menampilkan semua data siswa
        $query = "SELECT tb_kayu.*, user.*, limbah.* FROM tb_kayu INNER JOIN user  ON tb_kayu.id_user=user.id 
        JOIN limbah ON tb_kayu.id_limbah=limbah.id_limbah ORDER BY tb_kayu.id_ky asc";
        //pengeturan
        $config['base_url'] = base_url('toko/list_limbah/index');
        $config['total_rows'] = $this->db->query($query)->num_rows();
        $config['per_page'] = 5;
        $config['uri_segment'] = 4;
        $config['num_links'] = 3;
        // Style Pagination    
        // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap    
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        // End style pagination        
        $this->pagination->initialize($config);
        // Set konfigurasi paginationnya        
        $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
        $query .= " LIMIT " . $page . ", " . $config['per_page'];
        $data['limit'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $data['pagination'] = $this->pagination->create_links();
        // Generate link pagination nya sesuai config diatas   
        $data['kayu'] = $this->db->query($query)->result();
        return $data;
    }

    public function index($id_user, $kd_transaksi)
    {
        date_default_timezone_set('Asia/Jakarta');

        $invoice = array(
            'id_pembeli'       => $id_user,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'status_order'    => 1,
            'kode_transaksi' => $kd_transaksi
        );
        $this->db->insert('tb_order', $invoice);
        $id_invoice = $this->db->insert_id();
        $qty = $this->input->post('qty');
        foreach ($this->cart->contents() as $item) {
            $data = array(
                'order_id'        => $id_invoice,
                'id_kayu'            => $item['id'],
                'qty'            => $item['qty']
            );
            $this->db->insert('tb_detail_order', $data);
        }

        return TRUE;
    }

    public function find($id)
    {
        $result = $this->db->where('id_ky', $id)
            ->limit(1)
            ->get('tb_kayu');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_brg($id_brg)
    {
        $this->db->join('user', 'tb_kayu.id_user = user.id');
        $this->db->join('limbah', 'tb_kayu.id_limbah = limbah.id_limbah');
        $result = $this->db->where('id_ky', $id_brg)->get('tb_kayu');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    //SELESAI LIST LIMBAH DAN CART

    //Data Status Order 3 (SELESAI)
    public function status_3($id)
    {
        $this->db->distinct();
        $this->db->select('tb_order.id,tb_order.tgl_pesan,tb_order.status_order,tb_order.kode_transaksi');
        $this->db->join('tb_detail_order', 'tb_order.id = tb_detail_order.order_id');
        $this->db->join('tb_kayu', 'tb_detail_order.id_kayu = tb_kayu.id_ky');
        $this->db->join('user', 'tb_kayu.id_user = user.id');
        $this->db->where('tb_order.id_pembeli = ', $id);
        $this->db->where('tb_order.status_order = ', 3);
        return $this->db->get('tb_order');
    }

    public function status_3_donatur($id)
    {
        $this->db->distinct();
        $this->db->select('tb_order.id,tb_order.tgl_pesan,tb_order.status_order,tb_order.kode_transaksi');
        $this->db->join('tb_detail_order', 'tb_order.id = tb_detail_order.order_id');
        $this->db->join('tb_kayu', 'tb_detail_order.id_kayu = tb_kayu.id_ky');
        $this->db->join('user', 'tb_order.id_pembeli = user.id');
        $this->db->where('tb_kayu.id_user = ', $id);
        $this->db->where('tb_order.status_order = ', 3);
        return $this->db->get('tb_order');
    }

    public function detail($id)
    {
        $this->db->select('tb_order.*,tb_kayu.*,user.*,tb_detail_order.*');
        $this->db->join('tb_detail_order', 'tb_order.id = tb_detail_order.order_id');
        $this->db->join('tb_kayu', 'tb_detail_order.id_kayu = tb_kayu.id_ky');
        $this->db->join('user', 'tb_kayu.id_user = user.id');
        $result = $this->db->where('tb_detail_order.order_id = ', $id)->get('tb_order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function detail_donatur($id)
    {
        $this->db->distinct();
        $this->db->select('tb_order.*,tb_kayu.*,user.*,tb_detail_order.*');
        $this->db->join('tb_detail_order', 'tb_order.id = tb_detail_order.order_id');
        $this->db->join('tb_kayu', 'tb_detail_order.id_kayu = tb_kayu.id_ky');
        $this->db->join('user', 'tb_order.id_pembeli = user.id');
        $result = $this->db->where('tb_detail_order.order_id = ', $id)->get('tb_order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function detail_tanggal($id)
    {
        $this->db->select('tb_order.*');
        $result = $this->db->where('id', $id)->get('tb_order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function nama($id)
    {
        $this->db->distinct();
        $this->db->select('user.*');
        $this->db->join('user', 'tb_order.id_pembeli = user.id');
        $result = $this->db->where('tb_order.id', $id)->get('tb_order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    //SEKESAI DATA STATUS 3
    public function status_2($id)
    {
        $this->db->distinct();
        $this->db->select('tb_order.id,tb_order.tgl_pesan,tb_order.status_order,tb_order.kode_transaksi');
        $this->db->join('tb_detail_order', 'tb_order.id = tb_detail_order.order_id');
        $this->db->join('tb_kayu', 'tb_detail_order.id_kayu = tb_kayu.id_ky');
        $this->db->join('user', 'tb_kayu.id_user = user.id');
        $this->db->where('tb_order.id_pembeli = ', $id);
        $this->db->or_where('tb_order.status_order = ', 1);
        $this->db->or_where('tb_order.status_order = ', 2);
        $this->db->or_where('tb_order.status_order = ', 0);
        return $this->db->get('tb_order');
    }

    public function status_2_donatur($id)
    {
        $this->db->distinct();
        $this->db->select('tb_order.id,tb_order.tgl_pesan,tb_order.status_order,tb_order.kode_transaksi');
        $this->db->join('tb_detail_order', 'tb_order.id = tb_detail_order.order_id');
        $this->db->join('tb_kayu', 'tb_detail_order.id_kayu = tb_kayu.id_ky');
        $this->db->join('user', 'tb_kayu.id_user = user.id');
        $this->db->where('tb_kayu.id_user = ', $id);
        $this->db->where('tb_order.status_order = ', 1);
        $this->db->or_where('tb_order.status_order = ', 2);
        return $this->db->get('tb_order');
    }

    function gagal_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function proses_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function berhasil_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_all($id)
    {
        $this->db->distinct();
        $this->db->select('tb_order.kode_transaksi,tb_order.tgl_pesan,tb_order.status_order,user.name');
        $this->db->join('tb_detail_order', 'tb_order.id = tb_detail_order.order_id');
        $this->db->join('tb_kayu', 'tb_detail_order.id_kayu = tb_kayu.id_ky');
        $this->db->join('user', 'tb_order.id_pembeli = user.id');
        $result = $this->db->where('tb_kayu.id_user', $id)
            ->where('tb_order.status_order', 3)
            ->get('tb_order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_donasi($id)
    {
        $this->db->join('user', 'tb_kayu.id_user = user.id');
        $this->db->join('limbah', 'tb_kayu.id_limbah = limbah.id_limbah');
        $hasil = $this->db->where('id_ky', $id)->get('tb_kayu');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function getAllKayu()
    {
        return $this->db->get('tb_kayu')->result_array();
    }

    //
}
