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
    KayuNich <br>
    <b>Data Limbah Kayu Yang Didonasikan</b>
  </p>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <tr>
        <th>No.</th>
        <th>Jenis Kayu</th>
        <th>Jumlah</th>
        <th>Ukuran Kayu</th>
        <th>Bentuk Kayu</th>
        <th>Status</th>
        <th>Keterangan</th>
      </tr>
  </div>

  <?php
  $no = 1;
  foreach ($kayu as $ky) : ?>

    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $ky['nama_limbah'] ?></td>
      <td><?php echo $ky['jumlah_kayu'] ?></td>
      <td><?php echo $ky['ukuran_kayu'] ?></td>
      <td><?php echo $ky['bentuk_kayu'] ?></td>
      <td>
        <?php
        if ($ky['status'] == "0") {
          echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
        } else {
          echo "<span class='badge badge-primary'> Tersedia </span>";
        }
        ?>
      </td>
      <td><?php echo $ky['keterangan'] ?></td>
    </tr>

  <?php endforeach; ?>
  </div>
  </table>

  </div>

</body>

</html>
<script>
  window.print();
</script>