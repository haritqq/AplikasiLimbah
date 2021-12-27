<?php

class Model_kayu extends CI_Model
{
    public function tampil_data() // tadinya ada ($id) cmn gk tahu buat apa 
    {
        // $this->db->where('id_user = ', $id);
        return $this->db->get('tb_kayu');
    }

    public function tambah_kayu($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_kayu($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getKayuById($id)
    {
        return $this->db->get_where('tb_kayu', ['id_ky' => $id])->row_array();
    }
    public function getKaryaById($id)
    {
        return $this->db->get_where('tb_karya', ['id_kry' => $id])->row_array();
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

    public function ambil_id_kayu($id)
    {
        $this->db->join('user', 'tb_kayu.id_user = user.id');
        $this->db->join('limbah', 'tb_kayu.id_limbah = limbah.id_limbah');
        $result = $this->db->where('id_ky', $id)->get('tb_kayu');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function ambil_id_kayu1($id)
    {
        $this->db->join('limbah', 'tb_kayu.id_limbah = limbah.id_limbah');
        $result = $this->db->where('id_ky', $id)->get('tb_kayu');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getAllKayu()
    {
        $user = $this->session->userdata('id_user');
        $query = "SELECT tb_kayu.*, user.id
        FROM tb_kayu JOIN user
        ON tb_kayu.id_user = user.id
        AND user.id='$user'";
        return $this->db->query($query)->result_array();
    }
}
