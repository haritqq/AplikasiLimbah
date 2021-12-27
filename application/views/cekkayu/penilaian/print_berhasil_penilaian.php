<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <hr class="line-title">
  <img src="<?php echo base_url() ?>assets/img/profile/logo.png" style="position: absolute; width: 60px; height: 60px;">
  <p align="center" class="mr-4">
    KayuNich<br>
    <b>Hasil Cek Bukti Limbah Kayu</b>
  </p>
  <hr>
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
      <?php foreach ($penilaians as $p) : ?>
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
                echo "<span class='badge badge-success'> Limbah Kayu Tidak Lapuk</span>";
              } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Pelapukan") {
                echo "<span class='badge badge-warning'> Sedikit Lapuk </span>";
              } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Pelapukan") {
                echo "<span class='badge badge-danger'> Sangat Lapuk </span>";
              }
              if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Keretakan") {
                echo "<span class='badge badge-success'> Limbah Kayu Tidak Retak</span>";
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
  <h4>LIMBAH KAYU YANG DI CEK</h4>
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
        <?php $i = 1; ?>
        <?php foreach ($limbah as $k) : ?>
          <tr>
            <th class="text-center" scope="row"><?= $i ?></th>
            <td><?= $k['nama_limbah']; ?></td>
            <td><?php
                if ($k['nilai_rangking'] >= 4.5) {
                  echo "limbah kayu sangat memenuhi kriteria donasi";
                } elseif ($k['nilai_rangking'] >= 4.0) {
                  echo "limbah kayu cukup memenuhi kriteria donasi";
                } else {
                  echo "limbah kayu belum sesuai kriteria donasi (TETAPI ANDA TETAP MASIH BISA MENDONASIKAN LIMBAH KAYU) ";
                }
                ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>
<script>
  window.print();
</script>