<div class="container">
  <div class="card">
    <div class=" card-header">
      Form Donasi
    </div>
    <div class="card-body">
      <?php foreach ($barang as $dt) : ?>
        <form action="<?= base_url('toko/list_limbah/tambah_donasi_aksi'); ?>" method="post">
          <div class="form-group">
            <label>Nama Donatur</label>
            <input type="text" name="names" class="form-control" value="<?= $dt->name ?>" readonly>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="emails" class="form-control" value="<?= $dt->email ?>" readonly>
          </div>
          <div class="form-group">
            <label>Nomor telepon</label>
            <input type="text" name="nomor_telepons" class="form-control" value="<?= $dt->nomor_telepon ?>" readonly>
          </div>
          <div class="form-group">
            <label for="">Jenis Limbah Kayu</label>
            <input type="hidden" name="id_ky" value="<?= $dt->id_ky; ?>">
            <input type="text" name="nama_limbah" class="form-control" value="<?= $dt->nama_limbah; ?>" readonly>
          </div>
          <div class="form-group">
            <label>Jumlah Kayu</label>
            <input type="text" name="jumlah_kayu" class="form-control" value="<?= $dt->jumlah_kayu ?>" readonly>
          </div>
          <div class="form-group">
            <label>Ukuran Kayu</label>
            <input type="text" name="ukuran_kayu" class="form-control" value="<?= $dt->ukuran_kayu ?>" readonly>
          </div>
          <div class="form-group">
            <label>Bentuk Kayu</label>
            <input type="text" name="bentuk_kayu" class="form-control" value="<?= $dt->bentuk_kayu ?>" readonly>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?= $dt->keterangan ?>" readonly>
            <input type="hidden" name="id_user" class="form-control" value="<?= $dt->id_user ?>" readonly>
          </div>
          <button type="submit" class="btn btn-warning">Ambil Donasi</button>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>