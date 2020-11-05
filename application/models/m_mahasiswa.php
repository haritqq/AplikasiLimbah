<?php

class M_mahasiswa extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_mahasiswa');
    }
    public function input_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nama'      => $nama,
            'nim'       => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan'   => $jurusan
        );

        $where = array(
            'id'    => $id
        );

        $this->m_mahasiswa->update_data($where,$data,'tb_mahasiswa');
        redirect('mahasiswa/index');
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
}