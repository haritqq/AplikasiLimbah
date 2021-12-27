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
    <b>Data Donasi Proses</b>
  </p>
  <hr>
  <div class="table-responsive">

    <table class="table table-bordered table-hover">
      <tr class="text-center">
        <th>No.</th>
        <th>Toko</th>
        <th>Tanggal Transaksi</th>
        <th>Nomor Toko</th>
        <th>Jenis Kayu</th>
        <th>Jumlah Kayu</th>
      </tr>
  </div>

  <?php
  $no = 1;
  foreach ($transaksi as $ky) :
  ?>
    <tr class="text-center">
      <td><?php echo $no++ ?></td>
      <td><?php echo $ky->name ?></td>
      <td><?php echo date('d M Y', strtotime($ky->tgl_donasi)); ?></td>
      <td><?php echo $ky->nomor_telepon ?></td>
      <td><?php echo $ky->jenis_kayu ?></td>
      <td><?php echo $ky->jumlah_kayu ?></td>
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