<div class="container-fluid">

    <div class="jumbotron p-4 p-md-8 text-white rounded bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="display-8 font-italic">Mari Berdonasi Kayu</h1>
                    <p class="lead my-1">Jaga lingkungan agar tetap rapi, bersih dan terawat dengan membagikan kayu bekas anda kepada para pengrajin.</p>

                </div>
                <div class="col-md-5 align-items-center d-flex">
                    <img src="<?php echo base_url('/assets/img/donation3.png') ?>" alt="" class="img-fluid" style="height: 100%;">
                </div>

                <!-- <div class="row">
                    <div class="col-lg-8">
                        <h1 class="display-8">Mari Mencari Kayu
                        </h1>
                        <p class="">Dapatkan limbah kayu dari para pendonatur.</p>
                    </div>
                    <div class="col-lg-4 align-items-center d-flex">
                        <img src="<?php echo base_url('/assets/img/cafe.png') ?>" alt="" class="img-fluid" style="height: 70%;">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- <img src="<?= base_url('assets/assets/img/portfolio/portfolio-7.jpg'); ?>" class="d-block w-100" alt="..."> -->

<!-- Dashboard ini sebagai LANDING-PAGE hasil dri TER-UPLOADNYA limbah kayu User-Donatur -->

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> donatur</h1>
    <!-- bisa menambahkan curosel di sini -->

    <!-- card tampil donasi kayu -->
    <div class="row mt-3">
        <?php foreach ($kayu as $ky) : ?>
            <div class="card ml-3 mb-3" style="width: 18rem;">

                <img src="<?php echo base_url() . '/assets/img/upload/' . $ky['foto_kayu'] ?>" class="card-img-top" style="width:286px;height:250px;" alt="...">
                <div class="card-body">
                    <small><strong><?php echo $ky['name'] ?></strong></small><br>
                    <h5 class="card-title mb-1"><?php echo $ky['nama_limbah'] ?></h5>
                    <h6>
                        Jumlah
                        <span class="badge badge-pill badge-info">
                            <?php echo $ky['jumlah_kayu'] ?>
                        </span>
                    </h6>

                    <?php echo anchor(
                        'donatur/Beranda_user/detail/' . $ky['id_ky'],
                        '<div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"> Detail</i></div>'
                    ) ?>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</div>

<!-- <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Toko</h1>
    bisa menambahkan curosel di sini (ini koment)

    card tampil donasi kayu (ini koment)
    <div class="row mt-3">
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