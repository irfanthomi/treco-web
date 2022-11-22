<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li><?= $judul ?></li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="row portfolio">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Besi</li>
                        <li data-filter=".filter-2">Perumahan</li>
                        <li data-filter=".filter-3">Umum</li>



                    </ul>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($product as $p) :
                    if ($p['status'] == 'new') {
                        $status = 'bg-green';
                    } elseif ($p['status'] == 'sale') {
                        $status = 'bg-red';
                    }
                ?>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img src="<?= base_url('rn/product/image/') ?><?= $p['product_image'] ?>"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag <?= $status ?>"><?= $p['status'] ?></div>

                    <div class="title pt-3 "><b><?= $p['product_name'] ?></b></div>
                    <div class=" text-muted d-flex align-content-center justify-content-center">
                        <small><i> kategori : <?= $p['product_category_name'] ?></i></small>
                    </div>
                    <div class="price">Rp. <?= number_format($p['price']) ?></div>
                </div>

                <?php endforeach; ?>
            </div>


        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->