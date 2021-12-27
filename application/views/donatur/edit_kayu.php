<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> <?= $title; ?></h3>

    <?php foreach ($kayu as $ky) : ?>

        <form method="post" action="<?php echo base_url() . 'menu_donatur/update' ?>">

            <div class="for-group">
                <label for="">Jenis Kayu</label>
                <input type="text" name="jenis_kayu" class="form-control" value="<?php echo $ky->jenis_kayu ?>">
            </div>

            <div class="for-group">
                <label for="">Jumlah Kayu</label>
                <input type="text" name="jumlah_kayu" class="form-control" value="<?php echo $ky->jumlah_kayu ?>">
            </div>

            <div class="for-group">
                <label for="">Ukuran Kayu</label>
                <input type="text" name="ukuran_kayu" class="form-control" value="<?php echo $ky->ukuran_kayu ?>">
            </div>

            <div class="for-group">
                <label for="">Bentuk Kayu</label>
                <input type="text" name="bentuk_kayu" class="form-control" value="<?php echo $ky->bentuk_kayu ?>">
            </div>

            <div class="for-group">
                <label for="">Kondisi Kayu</label>
                <input type="text" name="kondisi_kayu" class="form-control" value="<?php echo $ky->kondisi_kayu ?>">
            </div>

            <div class="for-group">
                <label for="">keterangan</label>
                <input type="hidden" name="id_ky" class="form-control" value="<?php echo $ky->id_ky ?>">
                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control">value="<?php echo $ky->keterangan ?></textarea>
            </div>

            <button type=" submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>

        </form>

    <?php endforeach; ?>

</div>