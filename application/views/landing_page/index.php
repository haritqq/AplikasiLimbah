<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Selamat Datang di Website Kami</h1>
        <h2>Mari mulai donasikan limbah kayu anda</h2>
      </div>
    </div>
    <div class="text-center">
      <a href="#about" class="btn-get-started scrollto mb-4">Get Started</a>
    </div>


    <div class="row icon-boxes">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="ri-gift-line"></i></div>
          <h4 class="title"><a href="">Donasi</a></h4>
          <p class="description">Bantu para UMKM furniture dengan memberikan limbah kayu.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="ri-ancient-gate-line"></i></div>
          <h4 class="title"><a href="">Karya</a></h4>
          <p class="description">Lihat dan dapatkan salah satu hasil karya yang telah dibuat oleh para pengrajin.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="ri-user-star-line"></i></div>
          <h4 class="title"><a href="">Pengrajin</a></h4>
          <p class="description">Kayu yang didonasikan akan diambil oleh para pengrajin.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
        <div class="icon-box">
          <div class="icon"><i class="ri-hand-heart-line"></i></div>
          <h4 class="title"><a href="">Limbah Kayu</a></h4>
          <p class="description">Semua limbah kayu dapat didonasikan. </p>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tentang Kayunich</h2>
        <p>Selamat datang di situs ini. Website KayuNich memberikan informasi seputar pendonasian limbah kayu. </p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Dalam membangun website ini kami bertujuan untuk menyelesaikan masalah yang ada di masyarakat khusunya dalam faktor limbah kayu yakni.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Membantu para pengrajin dalam menemukan limbah kayu.</li>
            <li><i class="ri-check-double-line"></i> Memudahkan masyarakat untuk membuang limbah.</li>
            <li><i class="ri-check-double-line"></i> Menjaga lingkungan agar tetap indah.</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Kami berkomitmen untuk membantu masyarakat yang yang ingin berkreasi dalam usaha kerajinan furniture kayu. tujuan kami adalah mempertemukan
            masyarakat yang ingin membuang kayu bekas dengan pengrajin kayu agar dapat memberikan kemudahan pada usaha yang mereka dijalani.
          </p>
          <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row justify-content-end" style="margin-bottom:30px">

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">

            <span data-toggle="counter-up"><?php echo $limbah ?></span>
            <p>Donasi Limbah Kayu</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <span data-toggle="counter-up"><?php echo $karya ?></span>
            <p>Karya Limbah Kayu</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <span data-toggle="counter-up"><?php echo $total_donatur ?></span>
            <p>Donatur</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <span data-toggle="counter-up"><?php echo $total_toko ?></span>
            <p>Toko</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="section-title">
        <h2>Berita</h2>
      </div>
      <div class="row icon-boxes mt-3">
        <?php foreach ($berita as $b) : ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="<?php echo base_url(); ?>assets/gambar_berita/<?= $b['gambar']; ?>" alt="" width="400px" height="300">
              <h4 class="title"><a href="<?= base_url(); ?>landing_page/detail_berita/<?= $b['id']; ?>"><?= $b['judul_berita']; ?></a></h4>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <!-- ======= Portfolio Details Section ======= -->
  <!-- <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up"> -->

  <!-- <div class="portfolio-details-container">
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">
          <?php foreach ($tampilkarya as $kry) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"> -->
  <!-- <img src="<?php echo base_url() . '/assets/img/karya/' . $kry->foto_karya ?>" class="card-img-top" alt="..."> -->
  <!-- <div class="portfolio-info"> -->
  <!-- <h4><?php echo $kry->name ?></h4>
                  <h4><?php echo $kry->pengirim ?></h4> -->
  <!-- </div>
            </div>
          </div>
        <?php endforeach ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio Details Section -->
  <!-- <br> -->


  <div class="section-title">
    <h2>Lokasi Seluruh Pengguna</h2>
  </div>
  <div id="map" style="width: 80%; height: 350px;" class="mx-auto">
  </div>
  <script>
    var map = L.map('map').setView([-6.187662554809015, 106.76348441097255], 14);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1
    }).addTo(map);
    <?php foreach ($users as $key => $value) { ?>
      L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
        .bindPopup("<h5>Nama Tempat : <?= $value->name ?></h5>Alamat : <?= $value->alamat ?><br>Nomor Telpon : <?= $value->nomor_telepon ?>")
        .addTo(map);
    <?php } ?>
  </script>
  <!-- ======= About Video Section ======= -->
  <section id="about-video" class="about-video">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
          <img src="<?= base_url('assets/'); ?>assets/img/sddefault1.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=F9Q4Nz90IqY" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
          <h3>Kisah pengrajin limbah kayu yang sukses memulai usahanya dari kecil.</h3>
          <p class="font-italic">
            Pak Winarno telah menggunakan limbah kayu dari tahun 2011. Dalam memulai usahanya untuk membuat aksesoris ia menggunakan jenis limbah diantaranya
          </p>
          <ul>
            <li><i class="bx bx-check-double"></i> Limbah ranting pepohonan.</li>
            <li><i class="bx bx-check-double"></i> Limbah kayu industri mebel.</li>
            <li><i class="bx bx-check-double"></i> Limbah kayu dari masyarakat.</li>
          </ul>
          <p>
            Dari kisah pak Winarno dapat diambil contoh untuk memulai bisnis kerajinan furniture atau mebel dari nol dengan memanfaatkan limbah kayu.
            Dari usahanya tersebut pak Winarno dapat berkreasi menggunakan kreatifitasnya dalam membuat karyanya sehingga menghasilkan keuntungan.
          </p>
        </div>

      </div>

    </div>
  </section><!-- End About Video Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pertanyaan yang sering diajukan</h2>
        <p>Berikut beberapa pertanyaan yang sering ditanyakan untuk membantu anda.</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapsed" href="#faq-list-2">Bagaimana cara saya mengetahui kualitas limbah kayu yang saya miliki ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
              <ol type="1">
                <li>
                  Untuk mengetahui kualitas kayu yang dimiliki dapat dilakukan dengan <b>Login</b> terlebih dahulu sebagai donatur.
                </li>
                <li>
                  Langkah selanjutnya masuk ke menu <b>"Cek kayu"</b> > <b>"Isi Limba Kayu"</b> yang ada pada sidebar, klik tombol <b>"Silahkan isi Nama Limbah Kayu anda disini"</b> selanjutnya masukan <b><i>nama/jenis kayu atau nama barang</i></b>, kemudian klik <b>"Kirim"</b>.
                </li>
                <li>
                  Kemudian sistem akan mengarahkan ke submenu <b>"Tambah Penilaian"</b>. Lalu isi semua opsi yang ada berdasarkan fisik kayu yang dimiliki. setelah selesai klik tombol <b>"Kirim"</b>.
                </li>
                <li>
                  Sistem akan mengarahkan ke submenu <b>"Hasil Cek Limbah Kayu"</b> dan akan menampilkan nama limbah, nilai dan status limbah kayu. kemudian data dapat diprint dengan klik tombol <b><i>"icon print"</i></b>.
                </li>
              </ol>
              <p></p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Bagaimana cara saya mendonasikan limbah kayu saya ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
              <ol type="1">
                <li>
                  <b>"Login"</b> terlebih dahulu, lalu masuk cari <b>"Menu Donatur"</b> > <b>"Upload kayu"</b> kemudian isi <b>"form input data kayu"</b> hingga terisi semua. lalu klik tombol <b>"Save"</b>.
                </li>
                <li>
                  Langkah selanjutnya masuk ke submenu <b>"Donasi proses"</b>, tunggu hingga ada toko yang mengambil limbah atau menghubungi anda, jika sudah ada pilih button <b>"proses pengambilan"</b> agar pengrajin dapat menuju ke lokasi anda. apabila kayu sudah terambil pilih button <b>"Berhasil"</b>.
                </li>
                <li>
                  Untuk melihat detail donasi berhasil diambil dapat menuju ke submenu <b>"Donasi berhasil"</b>. lalu pilih button <b>"Detail</b> pada kolom table <b>"Detail order"</b>
                </li>
                <li>
                  Untuk mengambil bukti transaksi dapat menuju ke submenu <b>donasi proses </b> Pilih detail lalu pilih <b>"Print"</b>.
                </li>
              </ol>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Berapa minimal limbah kayu yang dapat saya donasikan ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
              <p>
                Tidak ada minimal donasi dalam mendonasikan limbah.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Jenis limbah kayu apa saja yang dapat didonasikan ? dan apa saja ukuran yang dapat didonasikan ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
              <p>
                Jenis limbah kayu yang dapat didonasikan dapat berupa apa saja dan juga dalam ukuran dan bentuk apa saja contohnya seperti potongan batok kelapa, ranting pohon kecil, gelondongan pohon kelapa, palet, dan juga serbuk kayu.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Apakah saya masih bisa mendonasikan limbah saya, apabila status limbah setelah cek kayu kurang memenuhi ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
              <p>
                Apabila limbah kayu yang sudah dinilai berstatus kurang memenuhi maka tidak ada masalah apabila ingin melakukan donasi, hal ini masih dibolehkan karena hal ini hanya menjadi penilai. di luar sana banyak para pengrajin kratif yang tetap akan mengambil limbah kayu tidak peduli kondisinya seperti apa mereka akan tetap menghasilkan karya.
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <!-- <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> -->

      <div class="row mt-5">

        <!-- <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>

        </div> -->

        <div class="col-lg-8 mt-5 mt-lg-0">

          <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form> -->

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->