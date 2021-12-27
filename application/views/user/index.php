<!-- Begin Page Content -->
<div class="container-fluid">
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url() ?>user/cetak/"><i class="fas fa-print"></i> Print Profile</a>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </a>

                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/profile/') .
                                                $user['image']; ?>" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <table>
                                    <tr>
                                        <td>
                                            <h5 class="card-title">Nama</h5>
                                        </td>
                                        <td style="padding: 10px;">
                                            <h5 class="card-title"> : </h5>
                                        </td>
                                        <td>
                                            <h5 class="card-title"><?= $user['name']; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-text">Email</p>
                                        </td>
                                        <td style="padding: 10px;">
                                            <p class="card-text"> : </p>
                                        </td>
                                        <td>
                                            <p class="card-text"><?= $user['email']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-text">No. Telepon</p>
                                        </td>
                                        <td style="padding: 10px;">
                                            <p class="card-text"> : </p>
                                        </td>
                                        <td>
                                            <p class="card-text"><?= $user['nomor_telepon']; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-text">Alamat Lengkap</p>
                                        </td>
                                        <td style="padding: 10px;">
                                            <p class="card-text"> : </p>
                                        </td>
                                        <td>
                                            <p class="card-text"><?= $user['alamat']; ?></p>
                                        </td>
                                    </tr>
                                </table>
                                <br>

                                <p class="card-text"><small class="text-muted">Bergabung Sejak <?= date('d F Y', $user['date_created']); ?> </small></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->