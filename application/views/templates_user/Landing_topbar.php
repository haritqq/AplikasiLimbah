<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Kayu<sup>Nich</sup></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a style="color:#343a40;" href="<?php echo base_url('landing_page') ?>">Beranda</a></li>
          <!-- <li><a href="<?php echo base_url('landing_page') ?>">Tentang Kami</a></li> -->
          <li><a href="<?php echo base_url('landing_page/karya_toko') ?>"> Karya Toko</a></li>
          <li><a href="<?php echo base_url('landing_page/team') ?>">Team</a></li>
          <!-- <li><a href="#pricing">Pricing</a></li> -->
          <!-- <li class="drop-down"><a href="">Bantuan</a>
            <ul>
              <li><a href="#">Bantuan</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <?php if ($this->session->userdata('email')) { ?>
            <li class="drop-down">
              <a href="">
                <strong class="card-title mb-1"><b style="color: gray;">Selamat datang,</b>
                </strong><br>
                <strong class="card-title mb-1" style="color: black;">
                  <?= $user['name']; ?>
                </strong>
              </a>
              <ul>
                <li>
                  <a class="dropdown-item" href="<?= base_url('user'); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    My Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    logout
                  </a>
                </li>
              </ul>
            </li>
        </ul>
      </nav>
    <?php } else { ?>
      <a href="<?= base_url('auth/registration_lp'); ?>" class="get-started-btn scrollto" style="color: white;">Daftar</a>
      <a class="get-started-btn scrollto" style="color: white;" href="<?= base_url('auth'); ?>"><span>login</span></a>
    <?php } ?>

    </div>


    </div>
  </header><!-- End Header -->