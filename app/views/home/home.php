<main id="main">
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <?php $no = 1;
                    foreach ($slide->result_array() as $slid) : $active = $no++ == 1 ? "active" : ""; ?>
                    <!-- Slide <?= $no++ ?> -->
                    <div class="carousel-item <?= $active ?> "
                        style=" background-image: url(<?= base_url('rn/slider/' . $slid['gambar']) ?>">
                        <!-- <div class="carousel-container">
                        <div class="carousel-content animate__fadeIn ">
                            <h2 class="animate__animated animate__fadeInDown"><?= $slid['judul'] ?> <span>IDM</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp"><?= $slid['isi'] ?></p>
                        </div>
                    </div> -->
                    </div>
                    <?php endforeach; ?>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->
    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
        <div class="container">
            <div class="row">
                <div class="px-4 px-md-0 benefit-slider h-100 swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class=" mt-4 mb-4">
                                <div class="icon-box">
                                    <i class="bi bi-bookmark-check-fill"></i>
                                    <h3><a href="">APPLICATOR
                                        </a></h3>
                                    <p>Para APPLICATOR mitra TRECO diberikan PELATIHAN dan sertifikasi
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class=" mt-4 mb-4">
                                <div class="icon-box">
                                    <i class="bi bi-inboxes-fill"></i>
                                    <h3><a href="">BAHAN BAKU</a></h3>
                                    <p>Terbuat dari material galvalum yang berkualitas<b> SNI 4096.2007</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" mt-4 mb-4">
                                <div class="icon-box">
                                    <i class="bi bi-cpu-fill"></i>
                                    <h3><a href="">SOFTWARE
                                        </a></h3>
                                    <p>Analisis dalam pengaplikasian TRECO didukung dan dikunci dengan SOFTWARE Treco
                                        Truss System Quik Series

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" mt-4 mb-4">
                                <div class="icon-box">
                                    <i class="bi bi-microsoft-teams"></i>
                                    <h3><a href="">DISTRIBUTOR</a></h3>
                                    <p>3 TITIK DISTRIBUTOR yang ada (Solok, Sijunjung, dan Padang Pariaman) </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" mt-4 mb-4">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard2-check"></i>
                                    <h3><a href="">QUALITY CONTROL
                                        </a></h3>
                                    <p>Mengendalikan quality dengan INSPEKSI, sehingga menghasilkan produk yang OPTIMAL
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <div class=" mt-4 mb-4">
                                <div class="icon-box">
                                    <i class="bi bi-boxes"></i>
                                    <h3><a href="">PRODUK

                                        </a></h3>
                                    <p>Produk dengan MUTU TERPADU terdiri dari Kanal, Reng, Furing, dan Spandek.


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row ">
                <div data-aos="fade-right" class="col-lg-6 d-flex align-items-center">
                    <img src="<?= base_url('rn/home/img/') ?><?= $setting->logo ?>" class=" logo-home img-fluid" alt="">
                </div>
                <div data-aos="zoom-in" data-aos-delay="200"
                    class=" d-flex align-items-center col-lg-6 pt-4 pt-lg-0 content">
                    <div>
                        <h3><?= $setting->Nama ?></h3>
                        <p>
                            <?= $setting->deskripsi ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="section-title">
            <h2>Product</h2>
            <p>Produk dengan MUTU TERPADU terdiri dari Kanal, Reng, Furing, dan Spandek.
            </p>
        </div>
        <div style="background-attachment:fixed; background-image: url(<?= base_url('assets/img') ?>/static.jpg ">
            <div class="overflow-hidden p-x-3" style="padding: 67px 0px 27px 0px; background:#ffffffd9 ">
                <div class="container-fuild">

                    <div class="row w-100">
                        <div data-aos="fade-right" data-aos-duration="1000"
                            class="shadow border col-md-6 p-0 home-galery">
                            <img src="<?= base_url('assets/img') ?>/static/coming.jpeg " alt="">
                        </div>
                        <div data-aos="fade-left" data-aos-duration="1000"
                            class="shadow border col-md-6 p-0 home-galery">
                            <div class="row">
                                <?php
                                foreach ($product_category_second as $pks) : ?>
                                <div id=" portfolio "
                                    class=" border shadow position-relative portfolio col-md-6 p-0  h-50">
                                    <div class="portfolio-wrap h-100">
                                        <img src="<?= base_url('assets/img') ?>/static/coming.jpeg " alt="">
                                        <div class=" portfolio-info">
                                            <h3><a href="" class=" text-white">Lihat Produk</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-center pt-3">
                    <a href="">
                        <button class="btn-basic ">
                            Lainnnya
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </section><!-- End Services Section -->
    <!-- Product -->



    <section id="clients" class="clients">
        <div class="container">
            <div class="section-title">
                <h2>Blogs</h2>
            </div>
            <div class="clients-slider swiper">
                <div class="swiper-wrapper">

                    <?php
                    foreach ($latest->result_array() as $lt) : ?>
                    <div class="swiper-slide">
                        <div id="featured" class="featured ">
                            <div class="icon-box w-100">
                                <div class=" w-100">
                                    <img width="100%" src="<?= base_url('rn/gambar/' . $lt['gambar']) ?>">
                                </div>
                                <div class=" mt-2"><a class="text-black"
                                        href="<?= detail_informasi($lt['id_artikel'], $lt['judul']) ?>"><?= $lt['judul'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

        </div>
    </section><!-- End Product Section -->

    <!-- Tabs content -->




    <!-- Tabs content -->

</main><!-- End #main -->