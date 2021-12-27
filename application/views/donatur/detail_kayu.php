<div class="container-fluid">
    <h3><i class="fas fa-search-plus"></i> <?= $title; ?></h3>

    <div class="card">
        <h5 class="card-header">Detail Limbah Kayu</h5>
        <div class="card-body">

            <?php foreach ($kayu as $ky) : ?>

                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/assets/img/upload/' . $ky->foto_kayu ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">

                            <tr>
                                <td>Jenis Limbah Kayu</td>
                                <td><strong><?php echo $ky->nama_limbah ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jumlah Kayu</td>
                                <td><strong><?php echo $ky->jumlah_kayu ?></strong></td>
                            </tr>
                            <tr>
                                <td>Ukuran Kayu</td>
                                <td><strong><?php echo $ky->ukuran_kayu ?></strong></td>
                            </tr>
                            <tr>
                                <td>Bentuk Kayu</td>
                                <td><strong><?php echo $ky->bentuk_kayu ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $ky->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                    if ($ky->status == "0") {
                                        echo "<span class='badge badge-danger'>Sudah diambil</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <div class="mb-3">
                            <a class="btn btn-sm btn-success" href="<?= base_url('menu_donatur/download_pembayaran/' . $ky->id_ky); ?>"><i class="fas fa-download"></i>Download Bukti Cek Kayu</a>
                        </div>
                        <?php echo anchor('menu_donatur', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</div>