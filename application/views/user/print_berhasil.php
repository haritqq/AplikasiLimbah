<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <hr class="line-title">
  <img src="<?php echo base_url() ?>assets/img/profile/logo.png" style="position: absolute; width: 60px; height: 60px;">
  <p align="center" class="mr-4">
    KayuNich User<br>
    <b>DONASI LIMBAH KAYU</b>
  </p>
  <hr>
  <table style="width:60%;">
    <tr>
      <td>
        <h5 class="card-title">Nama</h5>
      </td>
      <td>
        <h5 class="card-title"> : </h5>
      </td>
      <td>
        <h5 class="card-title"><?= $user['name']; ?></h5>
      </td>
    </tr>
    <tr>
      <td>
        <p class="card-text">Email</p>
      </td>
      <td>
        <p class="card-text"> : </p>
      </td>
      <td>
        <p class="card-text"><?= $user['email']; ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <p class="card-text">No. Telepon</p>
      </td>
      <td>
        <p class="card-text"> : </p>
      </td>
      <td>
        <p class="card-text"><?= $user['nomor_telepon']; ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <p class="card-text">Alamat Lengkap</p>
      </td>
      <td>
        <p class="card-text"> : </p>
      </td>
      <td>
        <p class="card-text"><?= $user['alamat']; ?></p>
      </td>
    </tr>
  </table>
  <p style="font-weight: bold; color: blue" class="card-text"><small class="text-muted">Bergabung Sejak <?= date('d F Y', $user['date_created']); ?> </small></p>
</body>

</html>
<script>
  window.print();
</script>