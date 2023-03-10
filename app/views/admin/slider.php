<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Slider</small></h3>
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
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <a class=" text-light collapse-link btn bg-defauld btn-sm">Tambah Slide</a>
                        <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class=" collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                    <div class="x_content " style="display: none;">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class=" d-flex align-items-center">
                                <div class="col-md-12">
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
                                        <input type="" name="judul" value="" class="form-control">
                                    </div>

                                    <div class="keterangan form-group">
                                        <label class="control-label" for="inputWarning">Isi</label>
                                        <textarea name="isi" class="form-control" cols="12" row="13"></textarea>
                                    </div>

                                    <div class="keterangan form-group">
                                        <label class="control-label" for="inputWarning">URL</label>
                                        <input type="" name="url" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" name="add" class="btn bg-defauld"><i class="fa fa-edit"></i>
                                    Simpan</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-disk"></i>Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">

                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">No </th>
                                        <th class="column-title">Judul</th>
                                        <th class="column-title">Gambar</th>
                                        <th class="column-title">Tanggal</th>
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
                                    foreach ($slider->result() as $slid) :
                                    ?>
                                    <tr class="even pointer">
                                        <td class=" "><?= $no; ?></td>
                                        <td class=" "><?php echo $slid->judul; ?></td>
                                        <td class=" "><a href="#" data-toggle="modal"
                                                data-target="#modal-default<?= $no ?>">
                                                Lihat Detail Gambar
                                            </a>
                                        </td>
                                        <td class=" "><?php echo $slid->tanggal_upload; ?></td>
                                        <td class="text-center last p-1"><a
                                                href="<?php echo base_url('admin/slider/edit/' . $slid->id_slider); ?>"
                                                title="Edit" class="btn text-light bg-defauld btn-sm"><i
                                                    class="fa fa-edit"></i> Edit</a></td>
                                        <td class="text-center last p-1"><a
                                                href="<?= base_url('admin/slider/delete/' . $slid->id_slider); ?>"
                                                title="Hapus" class="btn text-light bg-danger btn-sm"><i
                                                    class="fa fa-trash"></i> Hapus</a></td>
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

        <?php
        $no = 1;
        foreach ($slider->result() as $slid) :
        ?>
        <div class="modal modal-default fade" id="modal-default<?= $no ?>">
            <div class="modal-dialog" style="width: 100%">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="<?= base_url('rn/slider/' . $slid->gambar) ?>" class="image-responsive"
                            style="width: 80%;height: 400px">
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <?php $no++;
        endforeach; ?>
    </div>
</div>