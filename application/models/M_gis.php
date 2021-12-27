<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gis extends CI_Model
{
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    public function input($data)
    {
        $this->db->insert('geografis', $data);
    }

    public function detail($id_tempat)
    {
        $this->db->select('*');
        $this->db->from('geografis');
        $this->db->where('id_tempat', $id_tempat);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_tempat', $data['id_tempat']);
        $this->db->update('geografis', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_tempat', $data['id_tempat']);
        $this->db->delete('geografis', $data);
    }

    public function detail_gis($id = NULL)
    {
        $query = $this->db->get_where('geografis', array('id_tempat' => $id))->row();
        return $query;
    }

    public function tampil_data()
    {
        return $this->db->get('geografis');
    }
}


/* End of file ModelName.php */
