<main id="main">
    <!-- ======= Team Section ======= -->
    <section id="contact" class="mt-4 contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="info-box mb-4">
                        <div class="row px-4">
                            <div class="col-md-4 ">
                                <div class="p-3">
                                    <div class="border p-3 product-slider  swipeer">
                                        <div class=" swiper-wreapper">
                                            <?php
                                            $tab = 1;
                                            $images = explode(',', str_replace(" ", "", $product['images']));
                                            $slide = (count($images) > 1) ? "swiper-slide" : "";
                                            foreach ($images as $image) : ?>

                                            <div id="tab<?= $tab++ ?>"
                                                class=" <?= $tab == 1 ? "active" : "" ?> tabs w-100 <?= $slide ?>">
                                                <img style="min-height: 18rem;"
                                                    class="w-100 object-fit-contain lightbox p-2"
                                                    src="<?= ($image) ?  base_url('') . "rn/product/image/" . $image : base_url('') . "assets/img/static/blank-img.jpg" ?>"
                                                    alt="<?= $image ?>">
                                            </div>
                                            <?php
                                            endforeach;
                                            ?>



                                        </div>
                                        <div class=" swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="px-3">

                                    <ul class="tabMenu list-unstyled justify-content-center d-flex ">
                                        <?php
                                        $tab = 1;
                                        foreach ($images as $image) : ?>
                                        <li class="m-1 ">
                                            <a href="#tab<?= $tab++ ?>">
                                                <img class=" object-fit-cover shadow-sm p-2 "
                                                    src="<?= ($image) ?  base_url('') . "rn/product/image/" . $image : base_url('') . "assets/img/static/blank-img.jpg" ?>"
                                                    width="100" height="100" alt="<?= $image ?>">
                                            </a>
                                        </li>
                                        <?php
                                        endforeach;
                                        ?>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="p-3">
                                    <div class="text-start">
                                        <div>
                                            <h4><?= $product['product_name'] ?></h4>

                                        </div>

                                    </div>
                                    <div class="text-start">
                                        <table>
                                            <tr valign="top">
                                                <th class="p-2">
                                                    <p>Deskripsi: </p>
                                                </th>
                                                <td class="p-2">
                                                    <p><?= $product['product_description'] ?> </p>
                                                </td>

                                            </tr>
                                            <tr valign="top">
                                                <th class="p-2">
                                                    <p>Kategori: </p>
                                                </th>
                                                <td class="p-2">
                                                    <p> <?= $product['product_category_name'] ?></p>
                                                </td>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


        </div>
    </section>
</main><!-- End #main -->