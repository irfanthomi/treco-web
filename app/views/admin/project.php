<div class="right_col" role="main" style="min-height: 1288px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>project/<small>List</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                        <a class=" text-light collapse-link btn bg-defauld btn-sm">Tambah project</a>
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
                        <form id="demo-form2" action="" method="POST" data-parsley-validate=""
                            enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                    project
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" name="project_name" required class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">project
                                    Description
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea name="project_description" id="projectAdd" required
                                        class="form-control "></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">project
                                    Image
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type='file' name='files[]' multiple="">
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary btn-sm">Batal</button>
                            <button type="submit" name="add" class="btn bg-defauld btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- start project list -->
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">No </th>
                                    <th class="column-title">Nama</th>
                                    <!-- <th class="column-title">Deskripsi </th> -->
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
                                foreach ($project as $p) :
                                ?>
                                <tr class="even pointer">
                                    <td class=" "><?= $no; ?></td>
                                    <td class=" "><?= $p['project_name']; ?></td>
                                    <!-- <td class=" "><?= $p['project_description']; ?></td> -->
                                    <td class="text-center last p-1">
                                        <a href="<?php echo base_url('admin/projectEdit/' . $p['project_id']); ?>"
                                            title="Edit" class="btn text-light bg-defauld btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td class="text-center last p-1">
                                        <a href="<?php echo base_url('admin/projectDelete/' . $p['project_id']); ?>"
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

<script>
CKEDITOR.config.allowedContent = true;
CKEDITOR.replace('projectAdd', {
    filebrowserImageBrowseUrl: '<?php echo base_url('assets/filemanager/index.html'); ?>',
    filebrowserUploadUrl: '<?= base_url() ?>admin/uploadFile?type=images',
    exportPdf_tokenUrl: 'hkjhknkjknkjnkj',
    height: '35em',
    resize_minWidth: 200,
    resize_minHeight: 300,
    resize_maxWidth: 2800,
})
</script>