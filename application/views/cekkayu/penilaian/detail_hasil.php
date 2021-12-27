<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
  <table class="table table-sm table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Limbah Kayu</th>
        <th scope="col">Kriteria</th>
        <th scope="col">Sub Kriteria</th>
        <th scope="col">Hasil Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($penilaian as $p) : ?>
        <tr>
          <th class="text-center" scope="row"><?= $i ?></th>
          <td><?= $p['nama_limbah']; ?></td>
          <td><?= $p['nama_kriteria']; ?></td>
          <td><?= $p['nama_subkriteria']; ?></td>
          <td><?php
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Berjamur") {
                echo "<span class='badge badge-success'> Tidak Ada Jamur di Limbah Kayu</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Berjamur") {
                echo "<span class='badge badge-warning'> Sedikit ada jamur di limbah kayu </span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Berjamur") {
                echo "<span class='badge badge-danger'> Banyak Jamur di Limbah Kayu </span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Berlubang") {
                echo "<span class='badge badge-success'> Limbah Kayu Tidak Berlubang</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Berlubang") {
                echo "<span class='badge badge-warning'> Limbah Kayu Sedikit Berlubang </span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Berlubang") {
                echo "<span class='badge badge-danger'> Limbah Kayu Berlubang Sangat Banyak </span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Pelapukan") {
                echo "<span class='badge badge-success'> Limbah Kayu Tidak Berlubang</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Pelapukan") {
                echo "<span class='badge badge-warning'> Sedikit Lapuk </span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Pelapukan") {
                echo "<span class='badge badge-danger'> Sangat Lapuk </span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Keretakan") {
                echo "<span class='badge badge-success'> Limbah Kayu Tidak Berlubang</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Keretakan") {
                echo "<span class='badge badge-warning'> Sedikit Retak</span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Keretakan") {
                echo "<span class='badge badge-danger'>Retaknya Banyak</span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Warna") {
                echo "<span class='badge badge-success'>Berwarna Tua</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Warna") {
                echo "<span class='badge badge-warning'>Berwarna Tidak Tua dan Tidak Muda</span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Warna") {
                echo "<span class='badge badge-danger'> Berwarna Muda</span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Tekstur") {
                echo "<span class='badge badge-success'> Halus</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Tekstur") {
                echo "<span class='badge badge-warning'> Sedikit kasar dan sedikit halus</span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Tekstur") {
                echo "<span class='badge badge-danger'> Kasar </span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Ukuran Limbah Kayu") {
                echo "<span class='badge badge-success'>Besar</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Ukuran Limbah Kayu") {
                echo "<span class='badge badge-warning'>Sedang </span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Ukuran Limbah Kayu") {
                echo "<span class='badge badge-danger'> Kecil </span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Fisik Kayu") {
                echo "<span class='badge badge-success'> Keras</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Fisik Kayu") {
                echo "<span class='badge badge-warning'> Tidak terlalu keras dan tidak terlalu lunak </span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Fisik Kayu") {
                echo "<span class='badge badge-danger'> Lunak </span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Berat Kayu") {
                echo "<span class='badge badge-success'>Berat</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Berat Kayu") {
                echo "<span class='badge badge-warning'> Tidak terlalu berat dan tidak terlalu ringan </span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Berat Kayu") {
                echo "<span class='badge badge-danger'>Ringan</span>";
              }
              ?></td>
</div>
</div>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</tbody>
</table>


<div class="table-responsive">
  <table class="table table-striped table-hover table-bordered ">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Limbah Kayu</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $user = $this->session->userdata('id');

      $query = "SELECT rangking.id_rangking, limbah.nama_limbah, limbah.id_limbah, rangking.nilai_rangking, user.id FROM rangking 
                          JOIN limbah ON rangking.id_limbah = limbah.id_limbah
                          JOIN user ON rangking.id = user.id
                          AND user.id='$user'";
      $limbah = $this->db->query($query)->result_array();

      ?>
      <?php $i = 1; ?>
      <?php foreach ($limbah as $k) : ?>
        <tr>
          <th class="text-center" scope="row"><?= $i ?></th>
          <td><?= $k['nama_limbah']; ?></td>
          <td><?php
              if ($k['nilai_rangking'] >= 4.5) {
                echo "limbah kayu sangat memenuhi kriteria ";
              } elseif ($k['nilai_rangking'] >= 4.0) {
                echo "limbah kayu cukup memenuhi kriteria ";
              } else {
                echo "limbah kayu belum sesuai kriteria ";
              }
              ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
  window.print();
</script>