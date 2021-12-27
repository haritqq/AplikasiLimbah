<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php } ?>

    <?= $this->session->flashdata('message'); ?>
    <a target="_blank" type="button" href="<?php echo site_url() . 'donatur/donasi_proses/cetak_donasiproses/' ?>" class="btn btn-info btn-sm btn-icon-split mb-3">
        <span class="icon text-white-50">
            <i class="fas fa-print"></i>
        </span>
        <span class="text">Print</span>
    </a>
    <div class="table-responsive">
        <table id="berhasil_diambil" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Toko</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status Donasi</th>
                    <th colspan="4">Update Data</th>
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
            <td><?php
                echo date('d M Y', strtotime($ky->tgl_donasi)); ?></td>
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
                <?php echo anchor('donatur/donasi_proses/detail/' . $ky->id_donasi, '<div class="btn btn-sm btn-secondary"><i class="fa fa-search"></i>Detail</div>') ?>
            </td>
            <td>
                <?php echo anchor('donatur/donasi_proses/proses_pengambilan/' . $ky->id_donasi, '<div class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i>Limbah Kayu dalam Proses Pengambilan</div>') ?><br />
            </td>
            <td>
                <?php echo anchor('donatur/donasi_proses/berhasil/' . $ky->id_donasi, '<div class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i>Berhasil</div>') ?>
            </td>
            <td>
                <?php echo anchor('donatur/donasi_proses/gagal/' . $ky->id_donasi, '<div class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>Batalkan Proses Donasi</div>') ?><br />
            </td>
        </tr>
    <?php endforeach; ?>
</div>
</table>

</div>