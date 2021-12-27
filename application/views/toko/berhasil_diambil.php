<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="table-responsive">
        <table id="berhasil_diambil" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status Order</th>
                    <th>Detail Order</th>
                </tr>
            </thead>
    </div>

    <?php
    
    $no = 1;
    foreach ($kayu as $ky) :
        if($ky->status_order == 3 )
        {
            $pesan = 'Limbah Kayu Sudah Berhasil Di Ambil';
        }
         ?>
            <tr class="text-center">
            <td><?php echo $no++ ?></td>
            <td><?php echo $ky->kode_transaksi ?></td>
            <td><?php echo date('d M Y', strtotime($ky->tgl_pesan)); ?></td>
            <td><?php
                echo '<div class="btn btn-sm btn-success">'.$pesan.'</div>';
            ?>
            </td>
            <td><?php echo anchor('toko/berhasil_diambil/detail/'.$ky->id,'<div class="btn btn-sm btn-info"><i class="fa fa-search"></i>Detail</div>') ?></td>
        </tr>

    <?php endforeach; ?>
</div>
</table>

</div>