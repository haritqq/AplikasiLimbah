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
                    <img src="<?php echo base_url() . "/assets/img/upload/" . $brg->foto_kayu ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $brg->jenis_kayu ?></h5>
                        <small><?php echo $brg->keterangan ?></small><br>
                        <?php echo anchor('toko/beranda/tambah_ke_keranjang/' . $brg->id_ky, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                        <?php echo anchor('toko/beranda/detail/' . $brg->id_ky, '<div class="btn btn-sm btn-info">Detail</div>') ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
        <?php
        // Tampilkan link-link paginationnya  
        echo $barang['pagination'];
        ?>

    </div>

    <!-- <div class="container-fluid">

    <div class="jumbotron p-4 p-md-8 text-white rounded bg-dark">
        <div class="row">
            <img src="?= base_url('assets/assets/img/portfolio/portfolio-7.jpg'); ?>" alt="">
            <div class="row col-md-7 px-0">
                <img src="<?php echo base_url('/assets/img/cafe.png') ?>" class="card-img" alt="" style="height: auto;">
                <h1 class="row display-8 font-italic">Mari Berdonasi Kayu</h1>
                <p class="row lead my-1">Jaga lingkungan agar tetap rapi, bersih dan terawat dengan membagikan kayu bekas anda kepada para pengrajin.</p>
                <p class="row lead mb-0"><a href="#" class="text-white font-weight-bold"></a></p>
            </div>
        </div>
    </div>
</div> -->

    <!-- Design inspired from https://www.hotjar.com/ -->
    <!-- <div class="container-fluid">
    <div class="jumbotron">
        <div class="container text-center text-lg-left">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-8">Mari Mencari Kayu
                    </h1>
                    <p class="lead">Dapatkan limbah kayu dari para pendonatur.</p>
                </div>
                <div class="col-lg-4 align-items-center d-flex">
                    <img src="<?php echo base_url('/assets/img/cafe.png') ?>" alt="" class="img-fluid" style="height: 70%;">
                </div>
            </div>
        </div>
    </div>
</div> -->

    <!-- <div class="container-fluid"> -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- bisa menambahkan curosel di sini -->

    <!-- card tampil donasi kayu -->
    <!-- <div class="row mt-3">
        <?php foreach ($kayu as $ky) : ?>
            <div class="card ml-3 mb-3" style="width: 18rem;">

                <img src="<?php echo base_url() . '/assets/img/upload/' . $ky->foto_kayu ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $ky->jenis_kayu ?></h5>
                    <h6>
                        Jumlah
                        <span class="badge badge-pill badge-info">
                            <?php echo $ky->jumlah_kayu ?>
                        </span>
                    </h6>
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                    <?php echo anchor('dashboard/ambil/' . $ky->id_ky, '
                    <div class="btn btn-sm btn-primary">ambil</div>') ?>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</div> -->