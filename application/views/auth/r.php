<div class="container">





  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <div class="row mx-auto">
              <div class="col mx-auto my-1">
                <h6 style="text-align: center;">Registrasi Donatur</h6>
                <hr>
              </div>
            </div>
            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">

              <div class="form-group">
                <label class="d-block">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label class="d-block">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group">
                <label for="alamat" class="d-block">Alamat Lengkap</label>
                <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat lengkap">
                <?php echo form_error('alamat', '<small class="text-small text-danger pl-3">', '</small>') ?>
                <div class="invalid-feedback">
                </div>
              </div>

              <div class="form-group">
                <label for="jenis_kelamin" class="d-block">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                  <option value="">--Jenis Kelamin--</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin', '<small class="text-small text-danger pl-3">', '</small>') ?>
                <div class="invalid-feedback">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-6">
                  <label for="tempat_lahir" class="d-block">Tempat</label>
                  <div class="form-group">
                    <input type="text" class="form-control" id="tempat_lahir" placeholder="" value="<?= set_value('tempat_lahir'); ?>" name="tempat_lahir">
                    <?php echo form_error('tempat_lahir', '<small class="text-small text-danger pl-3">', '</small>') ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label for="tanggal_lahir" class="d-block">Tanggal Lahir</label>
                  <div class="form-group">
                    <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal lahir" value="<?= set_value('tanggal_lahir'); ?>" name="tanggal_lahir">
                    <?php echo form_error('tanggal_lahir', '<small class="text-small text-danger pl-3">', '</small>') ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>
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