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
    KayuNich SubKriteriaSPK<br>
    <b>DONASI LIMBAH KAYU</b>
  </p>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kriteria</th>
          <th scope="col">Nama Sub Kriteria</th>
          <th scope="col">Factor</th>
          <th scope="col">Nilai</th>
        </tr>
      </thead>
      <?php
      $query = "SELECT subkriteria.id_subkriteria,kriteria.id_kriteria, subkriteria.nama_subkriteria, subkriteria.faktor, subkriteria.nilai_subkriteria, kriteria.nama_kriteria FROM subkriteria INNER JOIN kriteria ON subkriteria.id_kriteria = kriteria.id_kriteria";
      $datasubkriteria = $this->db->query($query)->result_array();
      ?>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($subkriteria as $sk) : ?>
          <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $sk['nama_kriteria']; ?></td>
            <td><?= $sk['nama_subkriteria']; ?></td>
            <td><?= $sk['faktor']; ?></td>
            <td><?= $sk['nilai_subkriteria']; ?></td>
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