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
                <h3>project/<small>Edit</small></h3>
            </div>

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                        <a href="<?= base_url('admin/project') ?>"
                            class=" text-light collapse-link btn bg-defauld btn-sm">Kembali </a>
                        <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="" method="POST" class="form-horizontal form-label-left"
                            enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label col-md-2 col-sm-2 " for="first-name">Nama
                                    project
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="text" name="project_name" value="<?= $project['project_name'] ?>"
                                        required class="form-control ">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-2 col-sm-2 " for="first-name">project
                                    Description
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <textarea name="project_description" id="projectEdit<?= $project['project_id'] ?>"
                                        required class="form-control "><?= $project['project_description'] ?></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-2 col-sm-2 " for="first-name">project
                                    Image
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <div>
                                        <input type='file' name='files[]' multiple="">
                                    </div>
                                    <div class="row mt-3">
                                        <?php foreach ($project_images as $pi) : ?>
                                        <div class=" col-md-6 p-2">
                                            <div class="position-relative">
                                                <a
                                                    href="<?= base_url('admin/projectImageDelete/' . $pi['id'] . '/' . $project['project_id']); ?>">
                                                    <div
                                                        class=" btn-remove border-none rounded-circle  position-absolute">
                                                        x
                                                    </div>
                                                </a>
                                                <img src="<?= base_url("rn/project/image/" . $pi['image_name']) ?>"
                                                    class="shadow p-2 " width="223" alt="Avatar">
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


<script>
CKEDITOR.config.allowedContent = true;
CKEDITOR.config.pasteFromWordRemoveStyles = false;
CKEDITOR.config.pasteFromWordNumberedHeadingToList = true;
CKEDITOR.config.pasteFromWordPromptCleanup = true;
CKEDITOR.config.pasteFromWord_heuristicsEdgeList = false;
CKEDITOR.config.pasteFromWord_inlineImages = false;




CKEDITOR.replace('projectEdit' + <?= $project['project_id'] ?>, {

    filebrowserImageBrowseUrl: '<?php echo base_url('assets/filemanager/index.html'); ?>',
    filebrowserUploadUrl: '<?= base_url() ?>admin/uploadFile?type=images',
    exportPdf_tokenUrl: 'hkjhknkjknkjnkj',
    height: '35em',
    resize_minWidth: 200,
    resize_minHeight: 300,
    resize_maxWidth: 2800,
})
</script>