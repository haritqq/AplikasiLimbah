<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <a target="_blank" type="button" href="<?php echo site_url() . 'donatur/struk_donatur/cetak_all/'?>" class="btn btn-info btn-md btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-print"></i>
                                                        </span>
                                        <span class="text">Print Semua Transaksi</span>
                                    </a>     
                                    <br/>   
                                    <br/>                   
    <div class="table-responsive">
        <table id="berhasil_diambil" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status Order</th>
                    <th>Aksi</th>
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
            <td>
            <a href="<?php echo base_url() . 'donatur/struk_donatur/detail/'.$ky->id?>" class="btn btn-secondary btn-md btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-search"></i>
                                                        </span>
                                        <span class="text">Detail</span>
                                    </a>                                                 
            ||
            <a target="_blank" type="button" href="<?php echo site_url() . 'donatur/struk_donatur/cetak/'.$ky->id?>" class="btn btn-info btn-md btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-print"></i>
                                                        </span>
                                        <span class="text">Print</span>
                                    </a>                                                 
                                                </td>

        </tr>

    <?php endforeach; ?>
</div>
</table>

</div>