<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Struk Bukti Penerimaan Limbah Kayu</title>
 <link rel="stylesheet" href="">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
  .line-title{
   border: 0;
   border-style: inset;
   border-top: 1px solid #000;
  }
 </style>
</head>
<body>
 <img src="<?php echo base_url()?>assets/img/profile/logo.png" style="position: absolute; width: 60px; height: auto;">
 <table style="width: 100%;">
  <tr>
   <td align="center">
    <span style="line-height: 1.6; font-weight: bold;">
     KAYU
     <br>NICH
    </span>
   </td>
  </tr>
 </table>

 <hr class="line-title"> 
 <p align="center">
  STRUK BUKTI PENERIMAAN <br>
  <b>LIMBAH KAYU</b>
 </p>
 <?php
    foreach ($kayu1 as $ky) : ?>
    <h5>Kode Transaksi              : <strong><?php echo $ky->kode_transaksi ?> </strong></h5>
    <h5>Tanggal Transaksi           : <strong><?php echo date('d M Y', strtotime($ky->tgl_pesan)); ?> </strong>
    <?php endforeach; ?>
    <?php
     foreach ($nama as $ky) : ?>
        <h5>Nama Pemesan           : <strong><?php echo $ky->name ?> </strong>
        <?php endforeach; ?>
    <hr>
 <table class="table table-bordered">
 <tr class="text-center">
                    <th>No.</th>
                    <th>Jenis Kayu</th>
                    <th>Jumlah Pemesanan</th>
                    <th>Kondisi Kayu</th>
                    <th>Keterangan</th>
                    <th>Status Pemesanan</th>
  </tr>
  <?php $no=1; 
  foreach ($kayu as $row):
    if($row->status_order == 3 )
    {
        $pesan = 'Limbah Kayu Sudah Berhasil Di Ambil';
    } ?>
  <tr class="text-center">
    <td><?php echo $no++; ?></td>
    <td><?php echo $row->jenis_kayu ?></td>
    <td><?php echo $row->qty ?></td>
    <td><?php echo $row->kondisi_kayu ?></td>
    <td><?php echo $row->keterangan ?></td>
    <td><?php echo $pesan ?></td>
   </tr>
  <?php endforeach ?>
 </table>
 <script type="text/javascript">
    window.print();
</script>
</body>
</html>