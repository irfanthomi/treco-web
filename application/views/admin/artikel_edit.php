<div class="right_col" role="main" style="min-height: 1288px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Berita/ <small>Artikel</small></h3>
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

            <a href="<?= base_url('admin/artikel') ?>" class=" text-light collapse-link btn bg-defauld btn-sm">Kembali </a>
            <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
              <div class="item form-group">
                <label class="col-form-label  col-md-2 label-align" for="first-name">Judul <span class="required">*</span>
                </label>
                <div class="col-md-10 ">
                  <input type="text" name="judul" value="<?= $judul_artikel ?>" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label  col-md-2 label-align" for="last-name">Thumb <span class="required">*</span>
                </label>
                <div class="col-md-10 ">
                  <input type="file" name="gambar" <?= ($gambar) ? "" : "required='required"; ?> value="<?= base_url('rn/gambar/' . $gambar) ?>">
                  <img src="<?= base_url('rn/gambar/' . $gambar) ?>" width="100" alt="">

                </div>
              </div>
              <div class="form-group">
                <label class="col-form-label  col-md-2 label-align" for="last-name">Kategori</label>
                <div class="col-md-10">
                  <select class="form-control" name="kategori">'
                    <?php foreach ($kategori as $k) { ?>
                      <option value='<?= $k['id_kategori'] ?>'><?= $k['kategori'] ?></option>'
                    <?php    } ?>
                  </select>
                </div>
              </div>';
              <div class="item form-group">
                <label class="col-form-label col-md-2  label-align" for="first-name">Isi <span class="required">*</span>
                </label>
                <div class="col-md-10 "><textarea class="form-control ckeditor" rows="8" name="isi"><?= $isi ?></textarea>
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