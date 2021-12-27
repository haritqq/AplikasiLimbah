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
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>

        <div class="row icon-boxes">
            <?php foreach ($berita as $b) : ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <img src="<?php echo base_url(); ?>assets/gambar_berita/<?= $b['gambar']; ?>" alt="" width="400px" height="300">
                        <h4 class="title"><a href="<?= base_url(); ?>toko/landing_page/detail_berita/<?= $b['id']; ?>"><?= $b['judul_berita']; ?></a></h4>
                    </div>
                </div>
            <?php endforeach ?>
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

            <div class="row justify-content-end">

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

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                    <img src="<?= base_url('assets/'); ?>assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                    <img src="<?= base_url('assets/'); ?>assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                    <img src="<?= base_url('assets/'); ?>assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                    <img src="<?= base_url('assets/'); ?>assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                    <img src="<?= base_url('assets/'); ?>assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                    <img src="<?= base_url('assets/'); ?>assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Sevices Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <!-- <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
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

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                    </form>

                </div>

            </div>

        </div> -->
    </section><!-- End Contact Section -->

</main><!-- End #main -->