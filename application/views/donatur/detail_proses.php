<div class="container-fluid">
    <a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url() ?>donatur/donasi_proses"><i class="fa fa-back fa-sm"></i> Kembali</a>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    foreach ($transaksi as $ky) : ?>
        <h5>
            Silahkan cari dan chat email toko ini : <?php echo $ky->email ?>
            <a href="<?= base_url('chat/index') ?>" class="btn btn-success">
                chat disini </a> atau <br>
            Hubungi nomor Toko <?= $ky->name; ?> : <strong><?php echo $ky->nomor_telepon ?> </strong> Untuk Kesepakatan
        </h5><br>
    <?php endforeach; ?>
    <hr>
    <div class="table-responsive">

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Toko</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jenis Limbah Kayu</th>
                    <th>Jumlah Kayu</th>
                </tr>
            </thead>
    </div>

    <?php
    $no = 1;
    foreach ($transaksi as $ky) :
    ?>
        <tr class="text-center">
            <td><?php echo $no++ ?></td>
            <td><?php echo $ky->name ?></td>
            <td><?php echo date('d M Y', strtotime($ky->tgl_donasi)); ?></td>
            <td><?php echo $ky->nama_limbah ?></td>
            <td><?php echo $ky->jumlah_kayu ?></td>
        </tr>
    <?php endforeach; ?>
</div>
</table>