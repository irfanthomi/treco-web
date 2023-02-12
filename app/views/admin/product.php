<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <button type="button" class="btn bg-defauld btn-sm" data-toggle="modal"
                        data-target="#add_product">Tambah Product</button>
                    <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">No </th>
                                    <th class="column-title">Nama</th>
                                    <th class="column-title">Kategori </th>
                                    <th class="column-title">Deskripsi </th>
                                    <th colspan="2" class="text-center column-title  no-link last"><span
                                            class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($product as $p) :
                                ?>
                                <tr class="even pointer">
                                    <td class=" "><?= $no; ?></td>
                                    <td class=" "><?= $p['product_name']; ?></td>
                                    <td class=" "><?= $p['product_category_name']; ?></td>
                                    <td class=" "><?= $p['product_description']; ?></td>
                                    <td class="text-center last p-1">
                                        <a href="<?php echo base_url('admin/productEdit/' . $p['product_id']); ?>"
                                            title="Edit" class="btn text-light bg-defauld btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td class="text-center last p-1">
                                        <a href="<?php echo base_url('admin/productDelete/' . $p['product_id']); ?>"
                                            title="Edit" class="btn text-light  bg-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    $no++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

<!-- Add Product Modal -->
<div class="modal fade " tabindex="-1" id="add_product" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="demo-form2" action="" method="POST" data-parsley-validate="" enctype="multipart/form-data"
                class="form-horizontal form-label-left" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel2">Tambah Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="x_content">
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Product
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="product_name" required class="form-control ">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kategori
                                Product
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control " name="product_category">
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
                                <textarea name="product_description" required class="form-control "></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Image
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type='file' name='files[]' multiple="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" name="add" class="btn bg-defauld btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit modal -->