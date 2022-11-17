<div class="right_col" role="main" style="min-height: 1288px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Taem/ <small>User</small></h3>
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

                        <a href="<?= base_url('admin/team') ?>" class=" text-light  btn bg-defauld btn-sm">Kembali </a>
                        <span class="text-success"> &nbsp;
                            <?= $this->session->flashdata('pesan'); ?>
                        </span>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="" method="POST" class="form-horizontal form-label-left"
                            enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">username <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="text" name="username" value="<?= $username?>" class="form-control ">
                                    <span class="text-danger">
                                        <?= form_error('username') ?>
                                    </span>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">password
                                </label>
                                <div class="col-md-10 ">
                                    <input type="password" name="password" value="" placeholder="********"
                                        class="form-control ">
                                    <span class="text-info"><i>Kosongkan jika tidak ingin ganti password**</i></span>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">Nama <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="text" name="nama" value="<?=$nama ?>" class="form-control ">
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
                                    <input type="text" name="nip" value="<?=$nip ?>" class="form-control ">
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
                                    <input type="text" name="riwayat_pendidikan" value="<?=$riwayat_pendidikan ?>"
                                        class="form-control ">

                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="last-name">Jabatan</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="jabatan">
                                        <option value="<?=$jabatan ?>">
                                            <?=$jabatan ?>
                                        </option>
                                        <?php foreach ($jabatan_list->result_array() as $j) :?>
                                        <option value="<?=$j['id']?>">
                                            <?=$j['jabatan']?>
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
                                    <input type="email" name="email" value="<?=$email ?>" class="form-control ">
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
                                        rows="10" class="form-control "><?=$deskripsi_singkat ?></textarea>
                                    <span class="text-danger">
                                        <?= form_error('deskripsi_singkat') ?>
                                    </span>
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