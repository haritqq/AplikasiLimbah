<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <td><a target="_blank" type="button" href="<?php echo site_url() . 'toko/donasi_proses/cetak' ?>" class="btn btn-info btn-sm btn-icon-split mb-3">
            <span class="icon text-white-50">
                <i class="fas fa-print"></i>
            </span>
            <span class="text">Print</span>
        </a></td>
    <div class="table-responsive">
        <table id="berhasil_diambil" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Toko</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Donatur</th>
                    <th>Status Donasi</th>
                    <th>Action</th>
                </tr>
            </thead>
    </div>

    <?php

    $no = 1;
    foreach ($transaksi as $ky) :
        if ($ky->status_donasi == 1) {
            $pesan = 'Limbah Kayu dalam Proses Pengambilan';
        } elseif ($ky->status_donasi == 2) {
            $pesan = 'Transaksi Donasi sedang diajukan';
        } elseif ($ky->status_donasi == 3) {
            $pesan = 'Limbah Kayu sudah diambil';
        } else {
            $pesan = 'Transaksi limbah kayu dibatalkan';
        }
    ?>
        <tr class="text-center">
            <td><?php echo $no++ ?></td>
            <td><?php echo $ky->name ?></td>
            <td><?php echo date('d M Y', strtotime($ky->tgl_donasi)); ?></td>
            <td><?php echo $ky->names ?></td>
            <td><?php
                if ($ky->status_donasi == 1) {
                    echo '<div class="btn btn-sm btn-primary">' . $pesan . '</div>';
                } elseif ($ky->status_donasi == 2) {
                    echo '<div class="btn btn-sm btn-warning">' . $pesan . '</div>';
                } elseif ($ky->status_donasi == 3) {
                    echo '<div class="btn btn-sm btn-success">' . $pesan . '</div>';
                } else {
                    echo '<div class="btn btn-sm btn-danger">' . $pesan . '</div>';
                }
                ?>
            </td>
            <td>
                <?php if ($ky->status_donasi == "Selesai") { ?>
                    <button class="btn btn-sm btn-danger">donasi Selesai</button>
                <?php } else { ?>
                    <a href="<?= base_url('toko/donasi_proses/detail/' . $ky->id_donasi); ?>" class="btn btn-sm btn-warning">cek detail</a>
                <?php } ?>
            </td>
        </tr>

    <?php endforeach; ?>
</div>
</table>

</div>