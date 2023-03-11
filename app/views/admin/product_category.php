<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategori Product</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <a class=" text-light collapse-link btn bg-defauld btn-sm">Tambah Kategori</a>
                        <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class=" collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="display: none;">
                        <form id="demo-form2" action="" enctype="multipart/form-data" method="POST"
                            data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                    Kategori
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="product_category_name" required class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="product_category_description" class="form-control "></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Gambar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="product_category_image" class="form-control ">
                                </div>
                            </div>


                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                            <button type="submit" name="add" class="btn bg-defauld btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">No </th>
                                        <th class="column-title">Kategori</th>
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
                                    // var_dump($product_category);
                                    foreach ($product_category as $kat) : ?>
                                    <tr class="even pointer">
                                        <td class=" "><?= $no; ?></td>
                                        <td class=" "><?= $kat['product_category_name'] ?></td>
                                        <td class=" "><?= $kat['product_category_description']; ?></td>
                                        <td class="text-center last p-1"><a title="Edit" data-toggle="modal"
                                                data-target="#product_category_edit<?= $kat['product_category_id']; ?>"
                                                class="btn text-light bg-defauld btn-sm"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td class="text-center last p-1"><a
                                                href="<?= base_url('admin/product_category_delete/' . $kat['product_category_id']); ?>"
                                                title="Hapus" class="btn text-light bg-danger btn-sm"><i
                                                    class="fa fa-trash"></i></a></td>

                                    </tr>
                                    <?php $no++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

<!-- Edit modal -->
<?php
foreach ($product_category as $katModal) : ?>
<div class="modal fade " tabindex="-1" id="product_category_edit<?= $katModal['product_category_id'] ?>" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="demo-form2" action="" method="POST" enctype="multipart/form-data" data-parsley-validate=""
                class="form-horizontal form-label-left" novalidate="">
                <input type="text" hidden name="id" value="<?= $katModal['product_category_id'] ?>">

                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel2">Edit Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="x_content">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kategori
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="product_category_name"
                                    value="<?= $katModal['product_category_name']; ?>" required class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi
                                <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="product_category_description"
                                    class="form-control "><?= $katModal['product_category_description']; ?></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Gambar
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" name="product_category_image" class="form-control ">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" value="edit" name="edit" class="btn bg-defauld btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- /modals -->