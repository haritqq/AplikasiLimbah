<?php

class Limbah_model extends CI_Model
{
    public function getLimbahById($id_limbah)
    {
        return $this->db->get_where('limbah', ['id_limbah' => $id_limbah])->row_array();
    }
    public function getAllLimbah()
    {
        return $this->db->get('limbah')->result_array();
    }

    public function getAllLimbahUser()
    {
        $user = $this->session->userdata('id');
        $limbah = $this->db->query("SELECT * FROM limbah l JOIN user cs ON l.id = cs.id AND cs.id='$user' ORDER BY id_limbah DESC")->result_array();
    }

    public function getAllLimbahAdded()
    {

        $user = $this->session->userdata('id');
        $limbah = $this->db->query("SELECT * FROM limbah l JOIN user cs ON l.id = cs.id AND cs.id='$user' ORDER BY id_limbah DESC")->result_array();

        $limbahadd = [];
        foreach ($limbah as  $value) {
            $idlim = $value['id_limbah'];
            $limbah2 =  $this->db->get_where('rangking', 'rangking.id_limbah = ' . $idlim)->row_array();
            if (!$limbah2['id_limbah']) {
                $limbahadd[] = $value;
            }
        }
        return $limbahadd;
    }
    public function tambahDataLimbah()
    {
        $data = [
            'id' => $this->session->userdata('id'),
            'nama_limbah' => $this->input->post('nama_limbah', true)
        ];

        $this->db->insert('limbah', $data);
    }
    public function ubahDataLimbah($limbah, $id_limbah)
    {
        $nama_limbah = $this->input->post('nama_limbah', true);
        $data = [
            'nama_limbah' => $nama_limbah,
        ];
        $this->db->set($data);
        $this->db->where('id_limbah', $id_limbah);
        $this->db->update('limbah');
    }

    public function hapusDataLimbah()
    {
        $id_limbah =  $this->input->post('id_limbah', true);
        $this->db->delete('limbah', ['id_limbah' => $id_limbah]);
    }

    public function hapusDataLimbahNilai()
    {
        $id_limbah =  $this->input->post('id_limbah', true);
        $this->db->delete('penilaian', ['id_limbah' => $id_limbah]);
        $this->db->delete('hitung', ['id_limbah' => $id_limbah]);
        $this->db->delete('nilai_akhir', ['id_limbah' => $id_limbah]);
        $this->db->delete('rangking', ['id_limbah' => $id_limbah]);
    }
}
