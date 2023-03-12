<main id="main" style="background-color: #f3f3f3;">
    <section id="contact" class=" contact">
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <div class="blog p-0 indfo-box h-100 mb-4">
                        <div class="sidebar h-100 m-0">
                            <!-- <h3 class="sidebar-title">Cari Produk</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div> -->
                            <h3 class="sidebar-title">Katagory Produk</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <?php
                                    $i = 1;
                                    foreach ($product_category as $pc) : ?>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input category" name="category[]" value="<?= $pc['product_category_name'] ?>" type="checkbox" id="<?= $pc['product_category_id'] ?>">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <?= $pc['product_category_name'] ?> <a href=""><span>(<?= $pc['total'] ?>)</span></a>
                                                </label>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            <!-- End sidebar categories-->
                        </div>
                    </div>
                </div>
                <div class=" col-md-9 mt-2">
                    <div class="inkfo-box h-100 mb-4">
                        <div id="product_items"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<script>

</script>