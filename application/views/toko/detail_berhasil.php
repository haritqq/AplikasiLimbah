<div class="container-fluid">
<a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url()?>toko/berhasil_diambil"><i class="fa fa-back fa-sm"></i> Kembali</a>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <br/>
    <?php
    foreach ($kayu1 as $ky) : ?>
    <h5>Kode Transaksi              : <strong><?php echo $ky->kode_transaksi ?> </strong></h5>
    <h5>Tanggal Transaksi           : <strong><?php echo date('d M Y', strtotime($ky->tgl_pesan)); ?> </strong>
    <?php endforeach; ?>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="detail_berhasil">
            <thead class="thead-dark">
            <tr class="text-center">
                    <th>No.</th>
                    <th>Donatur</th>
                    <th>Jenis Kayu</th>
                    <th>Jumlah Pemesanan</th>
                    <th>Kondisi Kayu</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
    </div>

    <?php
    $no = 1;
    foreach ($kayu as $ky) : 
        if($ky->status_order == 3 )
        {
            $pesan = 'Limbah Kayu Sudah Berhasil Di Ambil';
        }?>

<tr class="text-center">
            <td><?php echo $no++ ?></td>
            <td><?php echo $ky->name ?></td>
            <td><?php echo $ky->jenis_kayu ?></td>
            <td><?php echo $ky->qty ?></td>
            <td><?php echo $ky->kondisi_kayu ?></td>
            <td><?php echo $ky->keterangan ?></td>
           
        </tr>

    <?php endforeach; ?>
</div>
</table>

</div>