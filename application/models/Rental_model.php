<?php

class Rental_model extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function detail_limbah($id_limbah)
    {
        $result = $this->db->where('id_jenis', $id_limbah)->get('jenis');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function downloadBukti($id)
    {
        $query = $this->db->get_where('form_donasi', array('
            id_fdonasi' => $id));
        return $query->row_array();
    }

    public function downloadBuktis($id)
    {
        $query = $this->db->get_where('form_izin', array('
            id_izin' => $id));
        return $query->row_array();
    }



    public function detail_karya($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('karya_manu');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }



    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    public function downloadPembayaran($id)
    {
        $query = $this->db->get_where('tb_kayu', array(
            'id_ky' => $id
        ));
        return $query->row_array();
    }

    public function update_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
