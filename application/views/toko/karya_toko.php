<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_karya"><i class="fa fa-plus fa-sm"></i> Upload Karya</button>
    <div class="container-fluid">
        <dic class="row">
            <?php foreach ($karya as $kry) : ?>
                <div class="card ml-3 mb-3" style="width: 18rem;">
                    <img src="<?php echo base_url() . '/assets/img/karya/' . $kry['foto_karya'] ?>" class="card-img-top" style="width:286px;height:290px;" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $kry['nama'] ?></h4>
                        <p class="card-text">
                            <b class="text-monospace"><span class="badge badge-success">Kegunaan : </span></b>
                            <br>
                            <?php echo $kry['kegunaan'] ?>
                        </p>
                        <p class="card-text">
                            <b class="text-monospace"><span class="badge badge-success">Deskripsi : </span></b>
                            <br>
                            <?php echo $kry['keterangan'] ?>
                        </p>
                        <p class="card-text">
                            <b class="text-monospace"><span class="badge badge-success">Pengirim : </span></b>
                            <br>
                            <?php echo $kry['name'] ?>
                        </p>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#editkayuModal<?= $kry['id_kry']; ?>" class="btn btn-sm btn-primary text-monospace">Edit</a>
                        </td>
                        <td><?php echo anchor(
                                'toko/karya_toko/hapus/' . $kry['id_kry'],
                                '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'
                            ) ?>
                        </td>
                    </div>
                </div>
            <?php endforeach ?>
        </dic>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="tambah_karya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Karya Toko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'toko/karya_toko/tambah_karya'; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Kegunaan</label>
                        <input type="text" name="kegunaan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                        <span><small>*Bisa diisi dengan detail barang</small></span>
                    </div>
                    <div class="form-group">
                        <label for="">Pengirim</label>
                        <input type="text" name="pengirim" class="form-control" value="<?= $user['name']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="foto_karya" class="form-control">
                    </div>

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
foreach ($karya as $ky) : $no++; ?>
    <div class="modal fade" id="editkayuModal<?= $ky['id_kry'] ?>" tabindex="-1" role="dialog" aria-labelledby="editkayuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editkayuModalLabel">Edit Karya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url(); ?>toko/karya_toko/edit_karya/<?= $ky['id_kry']; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kry" value="<?= $ky['id_kry']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $ky['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Kegunaan</label>
                            <input type="text" name="kegunaan" class="form-control" value="<?= $ky['kegunaan'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?= $ky['keterangan'] ?>">
                        </div>

                        <label>Gambar</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/karya/') . $ky['foto_karya']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" name="foto_karya" class="custom-file-input" id="foto_karya">
                                    <label class="custom-file-label" for="foto_karya">Choose file</label>
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
<?php endforeach; ?>