<!-- Dashboard ini sebagai LANDING-PAGE hasil dri TER-UPLOADNYA limbah kayu User-Donatur -->

<div class="container-fluid">
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- bisa menambahkan curosel di sini -->

    <!-- card tampil donasi kayu -->
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
</div>