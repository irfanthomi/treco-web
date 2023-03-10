<?= $this->session->flashdata('pesan'); ?>
<div class="right_col" role="main" style="min-height: 1288px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Berita/ <small>Artikel</small></h3>
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
                                    <button type="submit" name="tambah" class="btn bg-defauld">Simpan</button>
                                </div>
                            </div>

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
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 20%">Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Created</th>
                                    <th>Thumbnail</th>
                                    <th colspan="3" style="width: 20%">#Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data->result() as $berita) :
                                    $admin = $this->M_admin->select_where('admin', 'id_admin', $berita->id_user)->row();
                                    $kategori = $this->M_admin->select_where('kategori', 'id_kategori', $berita->kategori)->row();
                                    $hitung = $this->M_admin->select_where('admin', 'id_admin', $berita->id_user)->num_rows();
                                    $hit_kat = $this->M_admin->select_where('kategori', 'id_kategori', $berita->kategori)->num_rows();
                                ?>

                                    <tr>
                                        <td> <?= $no ?> </td>
                                        <td><?= $berita->judul ?></td>
                                        <td>
                                            <?php
                                            if ($hit_kat == "") :
                                                echo "Tidak Ada Kategori";
                                            else :
                                                echo $kategori->kategori;
                                            endif; ?>
                                        </td>
                                        <td><?= tgl_indonesia($berita->tanggal); ?></td>
                                        <td><?php if ($hitung == "") {
                                                echo 'TIDAK ADA DATA';
                                            } else {
                                                echo $admin->nama;
                                            }; ?></td>
                                        <td>
                                            <ul class="list-inline">
                                                <li>
                                                    <img src="<?php
                                                                $ada = file_exists("rn/gambar/" . $berita->gambar);
                                                                if ($ada) :
                                                                    echo base_url("rn/gambar/" . $berita->gambar);
                                                                elseif (!$ada) :
                                                                    echo base_url("rn/admin/dist/img/no-image.jpg");
                                                                endif;

                                                                ?>" class="avatar" alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/artikel_edit/' . $berita->id_artikel); ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/artikel_hapus/' . $berita->id_artikel); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>


                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>