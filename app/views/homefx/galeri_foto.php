<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h2><?= $judul ?></h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php
                        foreach ($album as $a) { ?>
                        <li data-filter=".filter-<?= $a['id_album'] ?>"><?= $a['nama_album'] ?></li>
                        <?php } ?>



                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <?php
                foreach ($galeri as $g) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $g['album'] ?>">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>rn/galeri/<?= $g['foto'] ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>rn/galeri/<?= $g['foto'] ?>" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>




            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->


</main><!-- End #main -->