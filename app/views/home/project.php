<main id="main" style="background-color: #f3f3f3;">
    <section id="contact" class=" contact">
        <div class="container pt-4">
            <div class="row">


                <?php
                if (!$project) { ?>
                <h4 class="text-center">Project Tidak ditemukan</h4>
                <?php }
                foreach ($project as $p) : ?>
                <div class="col-md-3  d-flex flex-column  justify-content-center product-item mb-3">
                    <div class="card-product h-100 ">
                        <div class="product  ">
                            <a href="<?= base_url('project_view') ?>/<?= $p['project_id'] ?>/<?= $p['project_name'] ?>">
                                <div class=" h-100">
                                    <div class="project-slider h-100 swiper">
                                        <div class="swiper-wrapper">
                                            <?php
                                                $images = explode(',', str_replace(" ", "", $p['images']));
                                                $slide = (count($images) > 1) ? "swiper-slide" : "";
                                                // print($p['images']);
                                                foreach ($images as $image) : ?>

                                            <div class="<?= $slide ?>">
                                                <img class=" object-fit-cover"
                                                    src="<?= ($image) ?  base_url('') . 'rn/project/image/' . $image : base_url('') . "assets/img/static/blank-img.jpg" ?>"
                                                    width="10" alt="<?= $image ?>">
                                            </div>
                                            <?php
                                                endforeach;
                                                ?>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>
                            </a>


                        </div>
                        <div class=" jus p-4">
                            <a href="<?= base_url('project_view') ?>/<?= $p['project_id'] ?>/<?= $p['project_name'] ?>">

                                <div class=" align-items-center pt-2 ">
                                    <small
                                        class=""><b><?= (str_word_count($p['project_name']) > 6 ? substr($p['project_name'], 0, 50) . "..." : $p['project_name'])  ?></b></small>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                <?php endforeach; ?>

            </div>
        </div>
        </div>
    </section>
</main><!-- End #main -->

<script>

</script>