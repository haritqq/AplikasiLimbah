<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Selamat Datang di Website Kami</h1>
        <h2>Mari mulai donasikan limbah kayu anda</h2>
      </div>
    </div>
    <div class="text-center">
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>

    <div class="row icon-boxes">
      <?php foreach ($berita as $b) : ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <img src="<?php echo base_url(); ?>assets/gambar_berita/<?= $b['gambar']; ?>" alt="" width="400px" height="300">
            <h4 class="title"><a href="<?= base_url(); ?>donatur/landing_page/detail_berita/<?= $b['id']; ?>"><?= $b['judul_berita']; ?></a></h4>
          </div>
        </div>
      <?php endforeach ?>

    </div>
  </div>
</section><!-- End Hero -->