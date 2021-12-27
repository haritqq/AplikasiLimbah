<!-- Dashboard ini sebagai LANDING-PAGE hasil dri TER-UPLOADNYA limbah kayu User-Donatur -->
<div class="container-fluid">

  <div class="jumbotron p-4 p-md-8 text-white rounded bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="display-8 font-italic">Mari Mencari Kayu</h1>
          <p class="lead my-1">Dapatkan limbah kayu dari para pendonatur.</p>

        </div>
        <div class="col-md-5 align-items-center d-flex">
          <img src="<?php echo base_url('/assets/img/Untitled1.png') ?>" alt="" class="img-fluid" style="height: 100%;">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong><?php echo $this->session->flashdata('success'); ?></strong>
    </div>
  <?php } ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="row text-center mt-3">

      <?php foreach ($barang['kayu'] as $brg) : ?>
        <div class="card ml-3 mb-3" style="width: 18rem;">
          <img src="<?php echo base_url() . "/assets/img/upload/" . $brg->foto_kayu ?>" class="card-img-top" alt="..." width="286px" height="250px">
          <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $brg->nama_limbah ?></h5>
            <small>nama donatur : <strong><?php echo $brg->name ?></strong></small><br>
            <?php
            if ($brg->status ==  "1") {
              echo anchor(
                'toko/list_limbah/tambah_donasi/' . $brg->id_ky,
                '<div class="btn btn-sm btn-primary">ambil donasi</div>'
              );
            } else {
              echo '<div class="btn btn-sm btn-danger">Tidak Tersedia</div>';
            }
            ?>
            <?php echo anchor('toko/list_limbah/detail/' . $brg->id_ky, '<div class="btn btn-sm btn-info">Detail</div>') ?>
          </div>
        </div>

      <?php endforeach; ?>

    </div>

  </div>