<div class="right_col" role="main" style="min-height: 1288px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?= $judul?></h3>
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

            <a class=" text-light collapse-link btn bg-defauld btn-sm">Tambah Artikel</a>
            <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class=" collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
          <div class="x_content" style="display: none;">
            <form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
              <div class="item form-group">
                <label class="col-form-label  col-md-2 label-align" for="first-name">Judul <span class="required">*</span>
                </label>
                <div class="col-md-10 ">
                  <input type="text" name="judul" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label  col-md-2 label-align" for="last-name">Thumb <span class="required">*</span>
                </label>
                <div class="col-md-10 ">
                  <input type="file" name="gambar" required="required">

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
                <div class="col-md-10 "><textarea class="form-control ckeditor" rows="8" name="isi"></textarea>
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