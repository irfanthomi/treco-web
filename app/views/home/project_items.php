 <div class="row px-md-4">

     <?php
        if (!$product) { ?>
         <h4 class="text-center">Product Tidak ditemukan</h4>
     <?php }
        foreach ($product as $p) :
            if ($p['status'] == 'new') {
                $status = 'bg-green';
            } elseif ($p['status'] == 'sale') {
                $status = 'bg-red';
            }
        ?>
         <div class="col-md-4  col-sm-6 d-flex flex-column  justify-content-center
                    product-item mb-3">
             <div class="card-product ">
                 <div class="product  ">
                     <a href="<?= base_url('product_view') ?>/<?= $p['product_id'] ?>/<?= $p['product_name'] ?>">
                         <div class=" h-100">
                             <div class="product-slider h-100 swiper">
                                 <div class="swiper-wrapper">
                                     <?php
                                        $images = explode(',', str_replace(" ", "", $p['images']));
                                        $slide = (count($images) > 1) ? "swiper-slide" : "";
                                        foreach ($images as $image) : ?>

                                         <!-- <div class="<?= $slide ?>"> -->
                                         <img src="<?= ($image) ?  base_url('') . "rn/product/image/" . $image : base_url('') . "assets/img/static/blank-img.jpg" ?>" width="10" alt="<?= $image ?>">
                                         <!-- </div> -->
                                     <?php
                                        endforeach;
                                        ?>
                                 </div>
                                 <div class="swiper-pagination"></div>
                             </div>

                         </div>
                     </a>


                 </div>
                 <div class="pb-4 px-4">
                     <a href="<?= base_url('product_view') ?>/<?= $p['product_id'] ?>/<?= $p['product_name'] ?>">

                         <div class=" align-items-center  title pt-3 "><b><?= $p['product_name'] ?></b></div>
                     </a>
                     <div class=" text-muted d-flex align-content-center justify-content-center">
                         <small> kategori : <?= $p['product_category_name'] ?></small>
                     </div>
                 </div>
             </div>

         </div>

     <?php endforeach; ?>
 </div>