<style>
    .box {
        position: relative;
        background: #ffffff;
        width: 100%;
    }

    .box-header {
        color: #444;
        display: block;
        padding: 10px;
        position: relative;
        border-bottom: 1px solid #f4f4f4;
        margin-bottom: 10px;
    }

    .box-tools {
        position: absolute;
        right: 10px;
        top: 5px;
    }

    .dropzone-wrapper {
        border: 2px dashed #91b0b3;
        color: #92b0b3;
        position: relative;
        height: 150px;
    }

    .dropzone-desc {
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        text-align: center;
        width: 40%;
        top: 50px;
        font-size: 16px;
    }

    .dropzone,
    .dropzone:focus {
        position: absolute;
        outline: none !important;
        width: 100%;
        height: 150px;
        cursor: pointer;
        opacity: 0;
    }

    .dropzone-wrapper:hover,
    .dropzone-wrapper.dragover {
        background: #ecf0f5;
    }

    .preview-zone {
        text-align: center;
    }

    .preview-zone .box {
        box-shadow: none;
        border-radius: 0;
        margin-bottom: 0;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
</style>

<section id="contact" class="contact mt-3">
    <div class="container">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><span>Submission to<b> <?= $journal ?></b></span> <span><?= $this->session->flashdata('pesan');
                                                                                                    ?></span></li>
            </ol>
        </nav>
        <div class="d">
            <!-- <form action=""> -->
            <form action="" method="post" role="form" class="php-email-form submission" mul style="width: 100%;" enctype="multipart/form-data">
                <div class="col-md-4 ">
                    <div class="p-2 mb-4 d-flex align-items-center justify-content-center dropzone-wrapper" style="height: 80%;">
                        <div class="text-center">
                            <h1 class="mb-0">
                                <i class="fa fa-file-word-o" aria-hidden="true">&nbsp;</i>|&nbsp;<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            </h1>
                            <span id="file"></span>
                            <span id="label">Upload File</span><br>
                        </div>
                        <input type="file" id="file-upload" accept=".doc,.docx,.pdf "name="artikel" class="dropzone">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="fgorm-row">
                        <div class=" form-group">
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= set_value('nama'); ?>" placeholder="Nama Lengkap">
                            <div class="validate"><?= form_error('nama') ?></div>
                        </div>
                        <div class=" form-group">
                            <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" id="email" placeholder=" Email" data-rule="email">
                            <div class="validate"><?= form_error('email') ?></div>
                        </div>
                        <div class=" form-group">
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= set_value('no_hp'); ?>" placeholder="No. Hp">
                            <div class="validate"><?= form_error('no_hp') ?></div>
                        </div>
                        <div class=" form-group">
                            <input type="text" class="form-control" name="afiliasi" value="<?= set_value('afiliasi'); ?>" id="afiliasi" placeholder=" Afiliasi">
                            <div class="validate"><?= form_error('afiliasi') ?></div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <!-- </form> -->
                    <div class="text-center"><button id="daftar" name="daftar" type="submit">Submit</button></div>
                </div>
            </form>
        </div>

    </div>
</section>
