<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top:30px">
        <h2></h2>
        <ol>
          <li><a href="<?php echo base_url() ?>landing_page">Landing Page</a></li>
          <li><?= $title; ?></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <div class="section-title">
    <h2>Karya Toko</h2>
    <p>Berikut beberapa hasil karya toko dari limbah kayu yang telah dibuat oleh para toko yang sudah bergabung.</p>
  </div>

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="portfolio-details-container">
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">
          <?php foreach ($karya as $kry) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?php echo base_url() . '/assets/img/karya/' . $kry['foto_karya'] ?>" class="card-img-top" alt="...">
                <div class="portfolio-info">
                  <h4><?php echo $kry['nama'] ?></h4>
                  <h4><?php echo $kry['name'] ?></h4>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>


    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->


<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
      Designed by <a href="https://bootstrapmade.com/">KayuNcih</a>
    </div>
  </div>
</div>