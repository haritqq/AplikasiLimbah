<div class="container-fluid">
    <a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url() ?>toko/donasi_proses"><i class="fa fa-back fa-sm"></i> Kembali</a>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    foreach ($transaksi as $ky) : ?>
        <h5>Tanggal Transaksi : <strong><?php echo date('d M Y', strtotime($ky->tgl_donasi)); ?> </strong>
            <h5>Untuk selanjutnya mohon tunggu chat dari donatur atas email <?= $ky->email; ?>
                <a href="<?= base_url('chat/index') ?>" class="btn btn-success">
                    chat</a> atau <br>
                bisa dihubungi lewat sms untuk kesepakatan
            </h5>
        <?php endforeach; ?>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="detail_berhasil">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Toko</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Donatur</th>
                        <th>Nomor Telepon Donatur</th>
                        <th>Jenis Limbah Kayu</th>
                        <th>Jumlah Kayu</th>
                        <th>Keterangan</th>
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
                <td><?php echo $ky->names ?></td>
                <td><?php echo $ky->nomor_telepons ?></td>
                <td><?php echo $ky->nama_limbah ?></td>
                <td><?php echo $ky->jumlah_kayu ?></td>
                <td><?php echo $ky->keterangan ?></td>

            </tr>

        <?php endforeach; ?>
</div>
</table>

</div>