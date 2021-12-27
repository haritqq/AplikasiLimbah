<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php } ?>

    <?= $this->session->flashdata('message'); ?>
    <div class="table-responsive">
        <table id="berhasil_diambil" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Toko</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status Donasi</th>
                </tr>
            </thead>
    </div>

    <?php

    $no = 1;
    foreach ($transaksi as $ky) :
        if ($ky->status_donasi == 3) {
            $pesan = 'Berhasil Di Donasikan';
        }
    ?>
        <tr class="text-center">
            <td><?php echo $no++ ?></td>
            <td><?php echo $ky->name ?></td>
            <td><?php echo date('d M Y', strtotime($ky->tgl_donasi)); ?></td>
            <td><?php
                if ($ky->status_donasi == 3) {
                    echo '<div class="btn btn-sm btn-success">' . $pesan . '</div>';
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</div>
</table>

</div>