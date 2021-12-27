<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_grafik extends CI_Model
{

    public function manugrafikkolum1()
    {
        $data = $this->db->query("SELECT * from user");
        return $data->result();
    }


    public function manugrafikkolum3()
    {
        $data = $this->db->query("SELECT * from workshop_kayu");
        return $data->result();
    }

    public function info()
    {
        $data = $this->db->query("SELECT * from info_limbah");
        return $data->result();
    }

    public function input()
    {
        $data = $this->db->query("SELECT * from jumlah_karya_orang_input");
        return $data->result();
    }
}

/* End of file M_grafik.php */
