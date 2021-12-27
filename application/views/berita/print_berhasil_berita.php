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
    KayuNich DataBerita<br>
    <b>DONASI LIMBAH KAYU</b>
  </p>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>#</th>
          <th>Judul</th>
          <th>Pengirim</th>
          <th>Tanggal input berita</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($berita as $b) :
        ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $b['judul_berita']; ?></td>
            <td><?= $b['pengirim']; ?></td>
            <td><?= date('d F Y', $b['date_created']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>
<script>
  window.print();
</script>