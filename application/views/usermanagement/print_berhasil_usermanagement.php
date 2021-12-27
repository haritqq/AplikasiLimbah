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
    KayuNich UserManagement<br>
    <b>DONASI LIMBAH KAYU</b>
  </p>
  <hr>
  <div class="table-responsive">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Status User</th>
          <th scope="col">Status Aktif</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($alluser as $au) : ?>
          <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $au['name']; ?></td>
            <td><?= $au['email']; ?></td>
            <td><?= $au['role']; ?></td>

            <?php if ($au['is_active'] == 1) : ?>
              <td class="text-center">
                <div class="badge badge-success">Aktif</div>
              </td>
            <?php else : ?>
              <td class="text-center">
                <div class="badge badge-danger">Tidak Aktif</div>
              </td>

            <?php endif; ?>
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