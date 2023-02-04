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
                <div class="col-lg-4">
                    <div class="icon-box">
                        <i class="bi bi-gem"></i>
                        <h3><a href="">Berkualitas</a></h3>
                        <p>Dapatkan besi konstruksi berkualitas dari distributor besi padang ternama</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class="bi bi-clipboard-data"></i>
                        <h3><a href="">Berpengalaman</a></h3>
                        <p>Berdiri sejak 19XX, kami telah dipercaya sebagai salah satu distributor besi terlengkap di
                            Padang</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class="bi bi-cash-coin"></i>
                        <h3><a href="">Harga Bersaing</a></h3>
                        <p>Kami memiliki visi untuk selalu berusaha untuk menyediakan besi berkualitas dengan tepat
                            waktu dan harga besi yang tersaing</p>
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
                            <?= $setting->tentang_universitas ?>
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
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                Sit
                sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div style="background-attachment:fixed; background-image: url(<?= base_url('assets/img') ?>/static.jpg ">
            <div class="overflow-hidden p-x-3" style="padding: 67px 0px 27px 0px; background:#7706063b ">
                <div class="container-fuild">

                    <div class="row" style="height: 600px;">
                        <div data-aos="fade-right" data-aos-duration="1000" class="col-md-6 p-0 home-galery">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTX_w_r-11dJ44DevjeL8aprs1C1my0ecUPCQ&usqp=CAU"
                                alt="">
                        </div>
                        <div data-aos="fade-left" data-aos-duration="1000" class="col-md-6  home-galery ">
                            <div class="row h-100">

                                <?php
                                foreach ($product_category_second as $pks) : ?>
                                <div id=" portfolio " class="position-relative portfolio col-md-6 p-0  h-50">
                                    <div style=" z-index:2; bottom:0;    background: #ffffffc4; "
                                        class=" w-100 text-black  position-absolute">
                                        <div class=" w-100 ">
                                            <h4>fsfvsdf</h4>
                                        </div>
                                    </div>
                                    <div class="portfolio-wrap h-100">
                                        <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZU-3sc-UMHCRLkIk3JvVDb1PqOJLAFha7S4_a6uIgvM9lRJyOSq3SFkzUUuSvh1HLpks&usqp=CAU"
                                            alt="">
                                        <div class=" portfolio-info">
                                            <!-- <h4><a href="" class="text-white"><?= $pks['product_category_name'] ?></a> -->
                                            </h4>
                                            <hr>
                                            <h3><a href="" class=" text-white">Lihat Produk</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <?php endforeach; ?>

                            </div>
                        </div>
                        <!-- <div class="clients-slider2 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div class="swiper-slide col-md-12">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZU-3sc-UMHCRLkIk3JvVDb1PqOJLAFha7S4_a6uIgvM9lRJyOSq3SFkzUUuSvh1HLpks&usqp=CAU"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="swiper-slide col-md-12">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZU-3sc-UMHCRLkIk3JvVDb1PqOJLAFha7S4_a6uIgvM9lRJyOSq3SFkzUUuSvh1HLpks&usqp=CAU"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div> -->
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
                                <div><b><a class="text-black" href=""><?= $lt['judul'] ?></b></a>
                                </div>
                                <p>Dapatkan besi konstruksi berkualitas dari distributor besi padang ternama</p>
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