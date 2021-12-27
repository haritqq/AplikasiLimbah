<?php

class Penilaian_model extends CI_Model
{
    public function getPenilaianById($id_penilaian)
    {
        return $this->db->get_where('penilaian', ['id_penilaian' => $id_penilaian])->row_array();
    }

    public function getAllPenilaian()
    {
        $user = $this->session->userdata('id');
        $query = "SELECT penilaian.*, limbah.nama_limbah, kriteria.nama_kriteria, subkriteria.nama_subkriteria, subkriteria.faktor, nilai_subkriteria,  user.name
                    FROM penilaian join limbah
                    ON penilaian.id_limbah = limbah.id_limbah
                    join subkriteria
                    on penilaian.id_subkriteria = subkriteria.id_subkriteria
                    join kriteria
                    on penilaian.id_kriteria = kriteria.id_kriteria
                    join user
                    on penilaian.id = user.id
                    AND user.id='$user'";
        return $this->db->query($query)->result_array();
    }

    public function getAllHitung()
    {
        $user = $this->session->userdata('id');
        $query = "SELECT hitung.faktor, hitung.rata_rata, limbah.nama_limbah, kriteria.nama_kriteria, user.name 
                    FROM hitung join limbah
                    ON hitung.id_limbah = limbah.id_limbah
                    join kriteria
                    on hitung.id_kriteria = kriteria.id_kriteria
                    join user
                    on hitung.id = user.id
                    AND user.id='$user'";
        return $this->db->query($query)->result_array();
    }

    public function getAllNilaiAkhir()
    {
        $user = $this->session->userdata('id');
        $query = "SELECT nilai_akhir.nilai_total, nilai_akhir.nilai_akhir, limbah.nama_limbah, kriteria.nama_kriteria, user.name  
                    FROM nilai_akhir join limbah
                    ON  nilai_akhir.id_limbah = limbah.id_limbah
                    join kriteria
                    on  nilai_akhir.id_kriteria = kriteria.id_kriteria
                    join user
                    on nilai_akhir.id = user.id
                    AND user.id='$user'";
        return $this->db->query($query)->result_array();
    }

    public function tambahDataPenilaian()
    {
        $user = $this->session->userdata('id');
        $subkriteria = $this->db->get('subkriteria')->result_array();
        foreach ($subkriteria as $s) {
            $idk =  $s['id_kriteria'];
            $idsub =  $s['id_subkriteria'];

            $nilai       = $this->input->post('nilai' . $idsub);

            $nilaisub = $s['nilai_subkriteria'];
            $selisih = $nilai - $nilaisub;
            $this->db->select('nilai_gap');
            $nilai_gap = $this->db->get_where('nilai_gap', ['selisih_gap' => $selisih])->row_array();
            $result = implode(",", $nilai_gap);

            $data = [
                'id_limbah' => $this->input->post('id_limbah', true),
                'id' => $this->session->userdata('id'),
                'id_kriteria' =>   $idk,
                'id_subkriteria' =>   $idsub,
                'nilai' => $nilai,
                'selisih' => $selisih,
                'nilai_gap' => $result
            ];
            $this->db->insert('penilaian', $data);
        }

        $id_limbah    = $this->input->post('id_limbah', true);
        $kriteria =  $this->db->get('kriteria')->result_array();

        foreach ($kriteria  as $kri) {
            $idkri =  $kri['id_kriteria'];

            $this->db->join('subkriteria', 'subkriteria.id_subkriteria = penilaian.id_subkriteria');
            $penilaian =  $this->db->get_where('penilaian', ['penilaian.id_kriteria' => $idkri, 'id_limbah' => $id_limbah])->result_array();

            $nilai = 0;
            $nilai2 = 0;
            $count = 0;
            $count2 = 0;
            $faktorcore = '';
            $faktorsec = '';

            foreach ($penilaian  as $pen) {

                if ($pen['faktor'] == "Core") {
                    $nilai += $pen['nilai_gap'];
                    $count++;
                    $faktorcore = $pen['faktor'];
                } else {
                    $nilai2 += $pen['nilai_gap'];
                    $count2++;
                    $faktorsec = $pen['faktor'];
                }
            }

            $rata_ratacore = $nilai / $count;
            $datacore = [
                'id_limbah' => $id_limbah,
                'id' => $this->session->userdata('id'),
                'id_kriteria' => $idkri,
                'faktor' => $faktorcore,
                'rata_rata' => $rata_ratacore

            ];

            $this->db->insert('hitung', $datacore);

            $rata_ratasec =  $nilai2 / $count2;
            $datasec = [
                'id_limbah' => $id_limbah,
                'id' => $this->session->userdata('id'),
                'id_kriteria' => $idkri,
                'faktor' => $faktorsec,
                'rata_rata' => $rata_ratasec
            ];

            $this->db->insert('hitung', $datasec);

            // echo '<pre>';          
            // var_dump($datacore) ;              
            // echo '</pre>';

            $hitung = $this->db->get_where('hitung', ['id_kriteria' => $idkri, 'id_limbah' => $id_limbah])->result_array();

            $nilai_total = 0;
            foreach ($hitung as $h) {

                if ($h['faktor'] == "Core") {
                    $nilai = $h['rata_rata'] * 0.6;
                } else {
                    $nilai2 = $h['rata_rata'] * 0.4;
                }
                $nilai_total = $nilai + $nilai2;
            }

            $nilai_kriteria = $kri['nilai_kriteria'] / 100;

            $nilai_akhir = $nilai_total * $nilai_kriteria;

            // echo '<pre>';
            // var_dump($nilai_akhir);
            // echo '</pre>';

            $data = [
                'id_limbah' => $id_limbah,
                'id' => $this->session->userdata('id'),
                'id_kriteria' => $idkri,
                'nilai_total' => $nilai_total,
                'nilai_akhir' =>  $nilai_akhir
            ];
            $this->db->insert('nilai_akhir', $data);

            // echo '<pre>';
            // var_dump($nilai_akhir);
            // echo '</pre>';
        }
        $jumlah_akhir = $this->db->select('sum(nilai_akhir) nilai_rangking')->get_where('nilai_akhir', ['id_limbah' => $id_limbah])->row_array();

        $data = [
            'id_limbah' => $id_limbah,
            'id' => $this->session->userdata('id'),
        ];
        $this->db->set($jumlah_akhir);
        $this->db->insert('rangking', $data);

        // echo '<pre>';
        // var_dump($jumlah_akhir);
        // echo '</pre>';
        // die;
    }


    public function ambil_id_penilaian($id)
    {
        $hasil = $this->db->where('id_limbah', $id)->get('penilaian');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }
}
