<?php

class Role_model extends CI_Model
{

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function ubahDataRole()
    {

        $role =  $this->input->post('roleedit', true);
        $id =  $this->input->post('id', true);

        $data = [
            'role' => $role
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('user_role');
    }

    public function hapusDataRole()
    {
        $id =  $this->input->post('id', true);
        $this->db->delete('user_role', ['id' => $id]);
    }
    function Jum_mahasiswa_role()
    {
        $this->db->group_by('role_id');
        $this->db->select('role_id');
        $this->db->select("count(*) as total");
        return $this->db->from('user')
            ->get()
            ->result();
    }
}
