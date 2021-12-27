<div class="container">

    <div class="row mx-auto">
        <div class="col mx-auto my-3">
            <h2 style="text-align: center;">Registrasi Toko</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card o-hidden border-0 shadow-lg mb-5 col-lg-12 mx-auto">
                <div class="card-header">
                    <b>Lokasi toko </b>| geser marker untuk menandai lokasi toko anda
                </div>
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-3">
                                <div id="mapid" style="height: 580px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg mb-5 col-lg-12 mx-auto">
                <div class="card-header">
                    <b>Masukan data toko</b>
                </div>
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-4">
                                <form class="user" method="post" action="<?= base_url('auth/registration_toko'); ?>">
                                    <div class="form-group">
                                        <label class="d-block">Nama Toko</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Toko" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat" class="d-block">Alamat Toko</label>
                                        <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat Toko">
                                        <?php echo form_error('alamat', '<small class="text-small text-danger pl-3">', '</small>') ?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-7">
                                            <label for="nomor_telepon" class="d-block">Nomor Telepon</label>
                                            <input id="nomor_telepon" type="text" class="form-control" name="nomor_telepon" placeholder="Nomor telepon">
                                            <?php echo form_error('nomor_telepon', '<small class="text-small text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="" class="d-block">Password</label>
                                            <div>
                                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                                <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="" class="d-block">Ulangi Password</label>
                                            <div>
                                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="latitude">Latitude</label>
                                                <input type="text" id="Latitude" class="form-control" id="latitude" value="<?= set_value('latitude'); ?>" placeholder="" name="latitude" readonly>
                                                <?= form_error('latitude', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="longitude">longitude</label>
                                                <input type="text" id="Longitude" class="form-control" id="longitude" value="<?= set_value('longitude'); ?>" placeholder="" name="longitude" readonly>
                                                <?= form_error('longitude', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="color: red; font-size: 12px">*Geser maker</p>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth'); ?> ">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>