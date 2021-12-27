<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Rangking Limbah Kayu</h6>
                </a>


                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <!-- <a href="<?= base_url('cekkayu/detail_hasil'); ?>" class="btn btn-warning mb-3"><i class="fa fa-print"></i>
                        </a> -->
                        <a href="<?= base_url('cekkayu/lihat_perhitungan'); ?>" class="btn btn-primary mb-3">lihat perhitungan
                        </a>
                        <p class="" style="color: green; font-size: 12px">note : apabila hasil limbah kayu anda belum memenuhi, anda tetap bisa donasikan limbah kayu anda</p>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered ">

                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Limbah Kayu</th>
                                        <th>Status</th>
                                        <th scope="col">Action1</th>
                                        <th scope="col">Action2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $user = $this->session->userdata('id');

                                    $query = "SELECT rangking.id_rangking, limbah.nama_limbah, limbah.id_limbah, rangking.nilai_rangking, user.id FROM rangking 
                                    JOIN limbah ON rangking.id_limbah = limbah.id_limbah
                                    JOIN user ON rangking.id = user.id
                                    AND user.id='$user'";
                                    $limbah = $this->db->query($query)->result_array();

                                    ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($limbah as $k) : ?>
                                        <tr>
                                            <th class="text-center" scope="row"><?= $i ?></th>
                                            <td><?= $k['nama_limbah']; ?></td>
                                            <td><?php
                                                if ($k['nilai_rangking'] >= 4.5) {
                                                    echo "limbah kayu sangat memenuhi kriteria donasi";
                                                } elseif ($k['nilai_rangking'] >= 4.0) {
                                                    echo "limbah kayu cukup memenuhi kriteria donasi";
                                                } else {
                                                    echo "limbah kayu belum sesuai kriteria donasi (TETAPI ANDA TETAP MASIH BISA MENDONASIKAN LIMBAH KAYU) ";
                                                }
                                                ?></td>
                                            <td>
                                                <div class="row">
                                                    <a href="" data-toggle="modal" data-target="#hapusLimbahModal<?= $k['id_limbah']; ?>" class="btn btn-sm btn-danger mx-auto"><i class="fas fa-trash"></i></a>
                                                    <div class="modal fade" id="hapusLimbahModal<?= $k['id_limbah']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLimbahModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="hapusLimbahModalLabel">Hapus Limbah</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <form action="<?= base_url('cekkayu/hapuslimbahnilai'); ?>" method="post">
                                                                    <input type="hidden" name="id_limbah" value="<?= $k['id_limbah'] ?>">
                                                                    <div class="modal-body">Apakah ingin menghapus Limbah <?= $k['nama_limbah'] ?>?</div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                                                                        <button class="btn btn-primary">Hapus</button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a target="_blank" type="button" href="<?php echo site_url() . 'cekkayu/cetak_detaildonasirangking/' . $k['id_rangking'] ?>" class="btn btn-info btn-sm mb-3">
                                                    <span class="icon text-white-30">
                                                        <i class="fas fa-print"></i>
                                                    </span>
                                                    <span class="text">Print</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->