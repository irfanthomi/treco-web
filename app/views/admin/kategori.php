<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategori</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <button type="button" class="btn bg-defauld btn-sm" data-toggle="modal"
                        data-target="#add_kategori">Tambah Kategori</button>
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
                                    <th class="column-title">Kategori</th>
                                    <th class="column-title">Kategori Seo </th>
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
                                foreach ($kategori->result() as $kat) : ?>
                                <tr class="even pointer">
                                    <td class=" "><?= $no; ?></td>
                                    <td class=" "><?= $kat->kategori; ?></td>
                                    <td class=" "><?= $kat->kategori_seo; ?></td>
                                    <td class="text-center last p-1"><a title="Edit" data-toggle="modal"
                                            data-target="#edit_kategori<?= $kat->id_kategori; ?>"
                                            class="btn text-light bg-defauld btn-sm"><i class="fa fa-edit"></i></a></td>
                                    <td class="text-center last p-1"><a
                                            href="<?= base_url('admin/kategori_hapus/'.$kat->id_kategori); ?>"
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
<!-- /page content -->

<!-- Add modal -->
<div class="modal fade " tabindex="-1" id="add_kategori" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="demo-form2" action="" method="POST" data-parsley-validate=""
                class="form-horizontal form-label-left" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel2">Tambah Kategori</h5>
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
                                <input type="text" name="kategori" required class="form-control ">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambah" class="btn bg-defauld btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit modal -->
<?php
foreach ($kategori->result() as $katModal) : ?>
<div class="modal fade " tabindex="-1" id="edit_kategori<?= $katModal->id_kategori ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="demo-form2" action="" method="POST" data-parsley-validate=""
                class="form-horizontal form-label-left" novalidate="">
                <input type="text" hidden name="id" value="<?= $katModal->id_kategori ?>">

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
                                <input type="text" name="kategori" value="<?= $katModal->kategori; ?>" required
                                    class="form-control ">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" name="edit" class="btn bg-defauld btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- /modals -->