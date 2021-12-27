<?php

class Model_karya extends CI_Model
{
    public function tampil_data() // tadinya ada ($id) cmn gk tahu buat apa 
    {
        return $this->db->get('tb_karya');
    }


    public function tambah_karya($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_karya($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // public function hapus_data($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }

    // public function detail_kayu($table, $where)
    // {
    //     return $this->db->get_where($table, $where);
    //     return $this->db->get('tb_kayu');
    // }

    public function find($id)
    {
        $result = $this->db->where('id_kry', $id)
            ->limit(1)
            ->get('tb_karya');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function getAllKarya()
    {
        // $user = $this->session->userdata('id');
        // $query = "SELECT tb_karya.*, user.id
        // FROM tb_karya JOIN user
        // ON tb_karya.id = user.id
        // AND user.id='$user'";
        // return $this->db->query($query)->result_array();
        $query = "SELECT tb_karya.*, user.* FROM tb_karya INNER JOIN user  ON tb_karya.id=user.id ORDER BY tb_karya.id_kry asc";
        $data['karya'] = $this->db->query($query)->result();
        return $data;
    }
}
