<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> <?= $title; ?></h3>

    <?php foreach ($karya as $kry) : ?>

        <form method="post" action="<?php echo base_url() . 'karya_toko/update' ?>">

            <div class="form-group">
                <label class="">Picture</label>
                <div class="">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?php echo base_url() . '/assets/img/karya/' . $kry->foto_karya ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_karya">
                                <label class="custom-file-label" for="gambar">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="for-group">
                <label for="">Nama Barang</label>
                <input type="text" name="name" class="form-control" value="<?php echo $kry->name ?>">
            </div><br>

            <div class="for-group">
                <label for="">Fungsi Barang</label>
                <input type="text" name="kegunaan" class="form-control" value="<?php echo $kry->kegunaan ?>">
            </div><br>

            <!-- <div class="for-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $kry->keterangan ?>">
            </div> -->

            <div class="for-group">
                <label for="">keterangan</label>
                <!-- <input type="hidden" name="id_kry" class="form-control" value="<?php echo $kry->id_kry ?>">
                <textarea type="text" name="keterangan" id="id_kry" cols="30" rows="10" class="form-control">
                <?php echo $kry->keterangan ?>
                </textarea> -->


                <input type="hidden" name="id_kry" class="form-control" value="<?php echo $kry->id_kry ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $kry->keterangan ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>



        </form>

    <?php endforeach; ?>

</div>