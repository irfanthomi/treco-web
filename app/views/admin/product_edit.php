<style>
    .btn-remove {
        height: 20px;
        width: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #4747476e;
        /* filter: drop-shadow(1px 1px 2px gray); */
        color: white;
        top: 4px;
        left: 4px;
        border: none;
    }

    .btn-remove:hover {
        background: #5f5f5f;

    }
</style>
<div class="right_col" role="main" style="min-height: 1288px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Berita/ <small>Artikel</small></h3>
            </div>

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                        <a href="<?= base_url('admin/product') ?>" class=" text-light collapse-link btn bg-defauld btn-sm">Kembali </a>
                        <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                    Product
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="product_name" value="<?= $product['product_name'] ?>" required class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kategori
                                    Product
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control " name="product_category">
                                        <option selected value="<?= $product['product_category'] ?>">
                                            <?= $product['product_category_name'] ?></option>
                                        <?php $no = 1;
                                        foreach ($product_category as $pc) :
                                        ?>
                                            <option value="<?= $pc['product_category_id'] ?>">
                                                <?= $pc['product_category_name'] ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product
                                    Description
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="product_description" required class="form-control "><?= $product['product_description'] ?></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product
                                    Image
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <div>
                                        <input type='file' name='files[]' multiple="">
                                    </div>
                                    <div class="row mt-3">
                                        <?php foreach ($product_images as $pi) : ?>
                                            <div class=" col-md-6 p-2">
                                                <div class="position-relative">
                                                    <a href="<?= base_url('admin/productImageDelete/' . $pi['id'] . '/' . $product['product_id']); ?>">
                                                        <div class=" btn-remove border-none rounded-circle  position-absolute">
                                                            x
                                                        </div>
                                                    </a>
                                                    <img src="<?= base_url("rn/product/image/" . $pi['image_name']) ?>" class="shadow p-2 " width="223" alt="Avatar">
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    </div>
                                </div>


                            </div>
                            <div class=" item form-group ">
                                <div class="col-md-12 text-right p-2">
                                    <button type="submit" name="edit" class="btn bg-defauld">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>