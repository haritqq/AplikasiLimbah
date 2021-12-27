<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus fa-sm"></i> Upload Limbah Kayu</button>
    <a target="_blank" type="button" href="<?php echo site_url() . 'menu_donatur/cetak/' ?>" class="btn btn-info btn-sm btn-icon-split mb-3">
        <span class="icon text-white-50">
            <i class="fas fa-print"></i>
        </span>
        <span class="text">Print</span>
    </a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Jenis Limbah Kayu</th>
                    <th>Jumlah</th>
                    <th>Ukuran Kayu</th>
                    <th>Bentuk Kayu</th>
                    <th>status</th>
                    <th colspan="3">
                        <center>Aksi</center>
                    </th>
                </tr>
            </thead>
    </div>

    <?php
    $no = 1;
    foreach ($kayu as $ky) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ky['nama_limbah'] ?></td>
            <td><?php echo $ky['jumlah_kayu'] ?></td>
            <td><?php echo $ky['ukuran_kayu'] ?></td>
            <td><?php echo $ky['bentuk_kayu'] ?></td>
            <td>
                <?php
                if ($ky['status'] == "0") {
                    echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                } else {
                    echo "<span class='badge badge-primary'> Tersedia </span>";
                }
                ?>
            </td>
            <td><?php echo anchor(
                    'menu_donatur/detail/' . $ky['id_ky'],
                    '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>'
                ) ?>
            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#editkayuModal<?= $ky['id_ky']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-edit"></i></a>
            </td>
            <td><?php echo anchor(
                    'menu_donatur/hapus/' . $ky['id_ky'],
                    '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'
                ) ?>
            </td>

        </tr>

    <?php endforeach; ?>
</div>
</table>




<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel" style="color: dimgray;"><b>Form Input Data Kayu</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'menu_donatur/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" style="font-size: large;"><b>Pilih Limbah Yang Sudah Di Cek</b></label>
                        <select name="id_limbah" id="id_limbah" class="form-control">
                            <?php foreach ($limbah as $k) : ?>
                                <option value="<?= $k['id_limbah'] ?>"><?= $k['nama_limbah'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class=" form-group">
                        <label for="" style="font-size: large;"><b>Jumlah</b></label>
                        <input type="text" name="jumlah_kayu" class="form-control">
                        <div style="color: darkslategrey; font-size: small;">diisi dengan kiloan atau berapa buah limbah yang di didonasi. contoh : 20 kg atau 20 buah</div>
                    </div>

                    <div class="form-group">
                        <label for="" style="font-size: large;"><b>Ukuran</b></label>
                        <select name="ukuran_kayu" id="" class="form-control col-sm-9">
                            <option value="">--Pilih Ukuran--</option>
                            <option value="Kecil">Kecil</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Besar">Besar</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" style="font-size: large;"><b>Bentuk</b></label>
                        <select name="bentuk_kayu" id="" class="form-control col-sm-9">
                            <option value="">--Pilih Bentuk--</option>
                            <option value="Balok">Balok</option>
                            <option value="Papan">Papan</option>
                            <option value="Batang">Batang</option>
                            <option value="Potongan">Potongan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" style="font-size: large;"><b>Keterangan</b></label>
                        <!-- <input type="text" name="keterangan" class="form-control"> -->
                        <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                        <div style="color: red; font-size: small;">Wajib cara mengisinya : hari pengambilan limbah kayu misalnya hari senin dsb, dan transportasi yang dapat diakses untuk jalan misalnya bisa diakses dengan mobil losbak</div>
                        <!-- <div style="color: darkslategrey; font-size: small;">Keadaan kayu yang ingin didonasikan. </div> -->
                    </div>

                    <div class="form-group">
                        <label for="" style="font-size: large;"><b>Gambar</b></label>
                        <input type="file" name="foto_kayu" class="form-control">
                        <div style="color: darkslategrey; font-size: small;">silahkan upload foto limbah kayu yang ingin didonasikan. upload secara jujur </div>

                    </div>
                    <div class="form-group">
                        <label for="" style="font-size: large;"><b>bukti cekkayu</b></label>
                        <input type="file" name="bukti_cekkayu" class="form-control">
                        <div style="color: darkslategrey; font-size: small;">Masukkan bukti ceklimbah kayu yang telah di cek pada menu cekkayu (upload berbentuk PDF)</div>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option value="1">Tersedia</option>
                            <option value="0">Sudah diambil</option>
                        </select>
                        <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <!-- <div class="form-group">
                        <label>Nama Pendonasi</label>
                        <input type="text" name="name" class="form-control" readonly>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<?php
$no = 0;
foreach ($kayu as $ky) : $no++; ?>
    <div class="modal fade" id="editkayuModal<?= $ky['id_ky']; ?>" tabindex="-1" role="dialog" aria-labelledby="editkayuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editkayuModalLabel">Edit Kayu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url(); ?>menu_donatur/edit_kayu/<?= $ky['id_ky']; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_ky" value="<?= $ky['id_ky']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" style="font-size: large;"><b>Pilih Limbah Yang Di cek</b></label>
                            <select name="id_limbah" id="id_limbah" class="form-control">
                                <option value="<?= $ky['id_limbah'] ?>"><?= $ky['nama_limbah'] ?></option>
                                <?php foreach ($limbah as $k) : ?>
                                    <option value="<?= $k['id_limbah'] ?>"><?= $k['nama_limbah'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Kayu</label>
                            <input type="text" name="jumlah_kayu" class="form-control" value="<?= $ky['jumlah_kayu'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Ukuran Kayu</label>
                            <select name="ukuran_kayu" id="" class="form-control">
                                <option <?php if ($ky['ukuran_kayu'] == "Kecil") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['ukuran_kayu']; ?> value="Kecil">Kecil</option>
                                <option <?php if ($ky['ukuran_kayu']  == "Sedang") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['ukuran_kayu']; ?> value="Sedang">Sedang</option>
                                <option <?php if ($ky['ukuran_kayu']  == "Besar") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['ukuran_kayu']; ?> value="Besar">Besar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bentuk Kayu</label>
                            <select name="bentuk_kayu" id="" class="form-control">
                                <option <?php if ($ky['bentuk_kayu'] == "Balok") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['bentuk_kayu']; ?> value="Balok">Balok</option>
                                <option <?php if ($ky['bentuk_kayu']  == "Papan") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['bentuk_kayu']; ?> value="Papan">Papan</option>
                                <option <?php if ($ky['bentuk_kayu']  == "Batang") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['bentuk_kayu']; ?> value="Batang">Batang</option>
                                <option <?php if ($ky['bentuk_kayu']  == "Potongan") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['bentuk_kayu']; ?> value="Potongan">Potongan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?= $ky['keterangan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option <?php if ($ky['status'] == "1") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['status']; ?> value="1">Tersedia</option>
                                <option <?php if ($ky['status']  == "0") {
                                            echo "selected = 'selected'";
                                        }
                                        echo $ky['status']; ?> value="0">Tidak Tersedia</option>
                            </select>
                            <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                        </div>


                        <label>Gambar</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/upload/') . $ky['foto_kayu']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" name="foto_kayu" class="custom-file-input" id="foto_kayu">
                                    <label class="custom-file-label" for="foto_kayu">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" name="bukti_cekkayu" class="form-control" value="<?= $ky['bukti_cekkayu'] ?>" readonly>
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" name="bukti_cekkayu" class="custom-file-input" id="bukti_cekkayu">
                                    <label class="custom-file-label" for="bukti_cekkayu">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php endforeach; ?>