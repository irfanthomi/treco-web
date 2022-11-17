<div class="right_col" role="main" style="min-height: 912px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Team / User</h3>

            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
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

                        <a class=" text-light collapse-link btn bg-defauld btn-sm">Tambah Data</a>
                        <?= $this->session->flashdata('pesan'); ?>
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
                    <div class="x_content" style="display: none;">
                        <form action="" method="POST" class="form-horizontal form-label-left"
                            enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">username <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="text" name="username" value="<?php echo set_value('username'); ?>"
                                        class="form-control ">
                                    <span class="text-danger">
                                        <?= form_error('username') ?>
                                    </span>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">password <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="password" name="password" value="" class="form-control ">
                                    <span class="text-danger">
                                        <?= form_error('password') ?>
                                    </span>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">Nama <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="text" name="nama" value="<?php echo set_value('nama'); ?>"
                                        class="form-control ">
                                    <span class="text-danger">
                                        <?= form_error('nama') ?>
                                    </span>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">NIK <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="text" name="nip" value="<?php echo set_value('nip'); ?>"
                                        class="form-control ">
                                    <span class="text-danger">
                                        <?= form_error('nip') ?>
                                    </span>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">Riwayat Pendidikan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="text" name="riwayat_pendidikan"
                                        value="<?php echo set_value('riwayat_pendidikan'); ?>" class="form-control ">

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="last-name">Jabatan</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="jabatan">
                                        <option></option>
                                        <?php foreach ($jabatan->result_array() as $j) : ?>
                                        <option value="<?= $j['id'] ?>">
                                            <?= $j['jabatan'] ?>
                                        </option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">Email <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="email" name="email" value="<?php echo set_value('email'); ?>"
                                        class="form-control ">
                                    <span class="text-danger">
                                        <?= form_error('email') ?>
                                    </span>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="last-name">Foto <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="file" name="team">
                                    <span class="text-danger">
                                        <?= form_error('team') ?>
                                    </span>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">Deskripsi Singkat
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <textarea name="deskripsi_singkat" value="" id="deskripsi_singkat" cols="30"
                                        rows="10"
                                        class="form-control "><?php echo set_value('deskripsi_singkat'); ?></textarea>
                                    <span class="text-danger">
                                        <?= form_error('deskripsi_singkat') ?>
                                    </span>
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
        <div class="clearfix"></div>

        <div class="row">
            <div class="x_panel">
                <div class="x_content">
                    <div class="col-md-12  col-md-12  text-center">
                    </div>
                    <div class="clearfix"></div>
                    <?php
                    $no = 1;
                    foreach ($team->result_array() as $team) :
                    ?>
                    <div class="col-md-4  profile_details">
                        <div class="well profile_view">
                            <div class=" col-md-12 d-flex align-items-center">
                                <div class="left mt-2 mb-2 col-sm-7">
                                    <h4>
                                        <?= $team['nama'] ?>
                                    </h4>
                                    <ul class="mb-1 list-unstyled">
                                        <li><i class="fa fa-building"></i>&nbsp; :
                                            <?php echo $team['jb']; ?>
                                        </li>
                                        <li><i class="fa fa-envelope-o"></i>&nbsp; :
                                            <?php echo $team['email'] ?>
                                        </li>
                                        <li><i class="fa fa-phone"></i>&nbsp; : </li>
                                    </ul>
                                    <div class="">
                                        <a title="Edit"
                                            href="<?php echo base_url('admin/team_edit/' . $team['id_team']); ?>"
                                            class="btn text-light bg-defauld btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('admin/team_hapus/' . $team['id_team']); ?>"
                                            class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
                                    </div>
                                </div>
                                <div class="right col-sm-5  text-center">
                                    <img src="<?php
                                                    $ada = file_exists("rn/team/" . $team['foto']);
                                                    if ($ada) : echo
                                                        base_url("rn/team/" . $team['foto']);
                                                    elseif (!$ada) : echo
                                                        base_url("rn/home/images/no-image.jpg");
                                                    endif; ?>" alt="" width="80"
                                        style="object-fit: cover;height: 80px;" class=" img-circle
                                    img-fluid" alt='<?= $team['foto'] ?>'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $no++;
                    endforeach; ?>



                </div>
            </div>
        </div>
    </div>
</div>