<div class="right_col" role="main" style="min-height: 1288px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Slider / <small>Edit</small></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                        <a href="<?= base_url('admin/slider') ?>" class=" text-light collapse-link btn bg-defauld btn-sm">Kembali </a>
                        <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <script>
                            $(function() {
                                function tampil_form(selektor) {
                                    if ($(selektor).val() == 'Y') {
                                        $('.keterangan').show();
                                    } else if ($(selektor).val() == "T") {
                                        $('.keterangan').hide();
                                    }
                                }
                                tampil_form('#keterangan_y select');

                                $('#keterangan_y select').change(function() {
                                    tampil_form(this);
                                });
                            });
                        </script>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class=" d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="inputWarning">File Gambar</label>
                                        <input type="file" class=" p-1 form-control" name="slider">
                                    </div>
                                    <div class="form-group" id="keterangan_y">
                                        <label class="control-label" for="inputWarning">Buat Keterangan Slider</label>
                                        <select class="form-control" name="keterangan_y">
                                            <option value=Y>Tampilkan</option>
                                            <option value=T>Tidak Tampilkan</option>
                                        </select>
                                    </div>
                                    <div class="keterangan form-group">
                                        <label class="control-label" for="inputWarning">Judul</label>
                                        <input type="" name="judul" value="<?= $as ?>" class="form-control">
                                    </div>

                                    <div class="keterangan form-group">
                                        <label class="control-label" for="inputWarning">Isi</label>
                                        <textarea name="isi" class="form-control" cols="12" row="13"><?= $isi ?></textarea>
                                    </div>

                                    <div class="keterangan form-group">
                                        <label class="control-label" for="inputWarning">URL</label>
                                        <input type="" name="url" value="<?= $url ?>" class="form-control">
                                    </div>



                                </div>
                                <div class="col-md-6">
                                    <?php
                                    if ($aksi == "edit") { ?>
                                        <div class="  img">
                                            <img src="<?= base_url('rn/slider/' . $gambar) ?>" height="300" style="width: 100%;     object-fit: cover; " class="img-responsive">
                                        </div>
                                    <?php } else {
                                        echo "";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" name="kirim" class="btn bg-defauld"><i class="fa fa-edit"></i> Simpan</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-disk"></i>Batal</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>