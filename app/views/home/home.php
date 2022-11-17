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

<main id="main">

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
                            Jakarta</p>
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

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <img src="<?= base_url('rn/home/img/') ?><?= $setting->logo ?>" class=" logo-home img-fluid" alt="">
                </div>
                <div class=" d-flex align-items-center col-lg-6 pt-4 pt-lg-0 content">
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
        <div class="container">
            <div class="section-title">
                <h2>Product</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
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
            <hr>
        </div>
    </section><!-- End Services Section -->
    <!-- Product -->

    <section id="clients" class="clients">
        <div class="container">
            <div class="section-title">
                <h2>Blogs</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="clients-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div id="featured" class="featured">
                            <div class="icon-box">
                                <i class="bi bi-gem"></i>
                                <h3><a href="">Berkualitas</a></h3>
                                <p>Dapatkan besi konstruksi berkualitas dari distributor besi padang ternama</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="featured" class="featured">
                            <div class="icon-box">
                                <i class="bi bi-gem"></i>
                                <h3><a href="">Berkualitas</a></h3>
                                <p>Dapatkan besi konstruksi berkualitas dari distributor besi padang ternama</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="featured" class="featured">
                            <div class="icon-box">
                                <i class="bi bi-gem"></i>
                                <h3><a href="">Berkualitas</a></h3>
                                <p>Dapatkan besi konstruksi berkualitas dari distributor besi padang ternama</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="featured" class="featured">
                            <div class="icon-box">
                                <i class="bi bi-gem"></i>
                                <h3><a href="">Berkualitas</a></h3>
                                <p>Dapatkan besi konstruksi berkualitas dari distributor besi padang ternama</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="featured" class="featured">
                            <div class="icon-box">
                                <i class="bi bi-gem"></i>
                                <h3><a href="">Berkualitas</a></h3>
                                <p>Dapatkan besi konstruksi berkualitas dari distributor besi padang ternama</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

        </div>
    </section><!-- End Product Section -->



</main><!-- End #main -->