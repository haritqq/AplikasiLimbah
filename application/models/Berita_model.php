<?php

class Berita_model extends CI_Model
{
    public function getAllBerita()
    {
        return $this->db->get('tb_berita')->result_array();
    }

    public function total_berita()
    {
        return $this->db->get('tb_berita');
    }

    public function getBeritaByEmail()
    {
        return $this->db->get_where('tb_berita', ['id' => $this->session->userdata('email')])->row_array();
    }

    public function getBeritaById($id)
    {
        return $this->db->get_where('tb_berita', ['id' => $id])->row_array();
    }

    public function hapusDataBerita()
    {
        $id =  $this->input->post('id', true);
        $this->db->delete('tb_berita', ['id' => $id]);
    }
}
