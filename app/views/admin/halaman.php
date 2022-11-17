<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Halaman</h3>
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
        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <button type="button" class="btn bg-defauld btn-sm" data-toggle="modal"
                        data-target="#add_halaman">Tambah Halaman</button>
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
                                    <th class="column-title">Judul</th>
                                    <th class="column-title">Admin </th>
                                    <th class="column-title">Tanggal </th>
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
                                <?php
                                $no = 1;
                                foreach ($halaman->result() as $berita) :
                                    $admin = $this->M_admin->select_where('admin', 'id_admin', $berita->id_user)->row();
                                    if (empty($berita->id_user)) {
                                        $da_admin = "Tidak ada ";
                                    } else {
                                        $da_admin = $admin->nama;
                                    }
                                ?>
                                <tr class="even pointer">
                                    <td class=" "><?= $no; ?></td>
                                    <td class=" "><?= $berita->judul    ?></td>
                                    <td class=" "><?= ucfirst($da_admin) ?></td>
                                    <td class=" "><?= tgl_indonesia($berita->tanggal) ?></td>
                                    <td class="text-center last p-1"><a title="Edit" data-toggle="modal"
                                            data-target="#edit_halaman<?= $berita->id_halaman ?>"
                                            class="btn text-light bg-defauld btn-sm"><i class="fa fa-edit"></i></a></td>
                                    <td class="text-center last p-1"><a
                                            href="<?= base_url('admin/halaman_hapus/' . $berita->id_halaman); ?>"
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

<!-- Add Halaman modal -->
<div class="modal fade " tabindex="-1" id="add_halaman" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="demo-form2" action="" method="POST" enctype="multipart/form-data" data-parsley-validate=""
                class="form-horizontal form-label-left" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel2">Tambah Halaman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="x_content">

                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Judul Halaman
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-10 ">
                                <input type="text" name="judul" required class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2  label-align" for="first-name">Isi <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-10 "><textarea id="editorAdd" rows="10" cols="80" name="isi"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label  col-md-2 label-align" for="last-name">Thumb <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-10 ">
                                <input type="file" name="gambar" required="required">

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
<!-- Edit halaman modal -->
<?php
$no = 1;
foreach ($halaman->result() as $halModal) : ?>
<div class="modal fade " tabindex="-1" id="edit_halaman<?= $halModal->id_halaman ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="demo-form2" action="" method="POST" enctype="multipart/form-data" data-parsley-validate=""
                class="form-horizontal form-label-left" novalidate="">
                <input type="text" name="id" value="<?= $halModal->id_halaman; ?>" required class="form-control ">

                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel2">Edit Halaman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="x_content">

                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Judul Halaman
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-10 ">
                                <input type="text" name="judul" value="<?= $halModal->judul; ?>" required
                                    class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2  label-align" for="first-name">Isi <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-10 "><textarea class="form-control "
                                    id="editorEdit<?= $halModal->id_halaman; ?>" rows="20" cols="80"
                                    name="isi"><?= $halModal->isi; ?></textarea>
                            </div>
                        </div>
                        <div class="item row align-items-center form-group">
                            <label class="col-form-label  col-md-2 label-align" for="last-name">Thumb <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-10 ">
                                <input type="file" name="gambar" required="required">
                                <img src="/rn/img/<?= $halModal->gambar ?>" width="100" alt="">

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
<script>
CKEDITOR.replace('editorEdit' + <?= $halModal->id_halaman; ?>);
</script>
<?php endforeach; ?>
<!-- /modals -->
<script>
CKEDITOR.replace('editorAdd', {
    filebrowserBrowseUrl: '/browser/browse.php',
    filebrowserUploadUrl: '<?= base_url() ?>admin/uploadFile'
});
</script>