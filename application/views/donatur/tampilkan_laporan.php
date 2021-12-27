<div class="container-fluid">

  <section class="section">
    <div class="section-header">
      <h1>Laporan Transaksi</h1>
    </div>
  </section>
  <form method="POST" action="<?= base_url('donatur/laporan'); ?>">
    <div class="form-group">
      <label for="">Dari Tanggal</label>
      <input type="date" name="dari" class="form-control">
      <?= form_error('dari', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form-group">
      <label for="">Sampai Tanggal</label>
      <input type="date" name="sampai" class="form-control">
      <?= form_error('sampai', '<div class="text-small text-danger">', '</div>') ?>
    </div>

    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>Tampilkan Data</button>
  </form>
  <hr>
  <br>

  <div class="table-responsive">

    <table class="table table-bordered table-hover" id="display6">
      <thead class="thead-dark">
        <tr class="text-center">
          <th>No.</th>
          <th>Nama Toko</th>
          <th>Nomor Toko</th>
          <th>Tanggal Transaksi</th>
          <th>Jenis Limbah Kayu</th>
          <th>Jumlah Kayu</th>
          <th>Status</th>
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
      <td><?php echo $ky->nomor_telepon ?></td>
      <td><?php echo date('d M Y', strtotime($ky->tgl_donasi)); ?></td>
      <td><?php echo $ky->nama_limbah ?></td>
      <td><?php echo $ky->jumlah_kayu ?></td>
      <td><?php
          if ($ky->status_donasi == 1) {
            echo '' . $pesan . '</div>';
          } elseif ($ky->status_donasi == 2) {
            echo '' . $pesan . '</div>';
          } elseif ($ky->status_donasi == 3) {
            echo '' . $pesan . '</div>';
          } else {
            echo '' . $pesan . '</div>';
          }
          ?>
      </td>
    </tr>
  <?php endforeach; ?>
</div>
</table>
</div>