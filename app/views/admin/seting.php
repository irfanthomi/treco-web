<div class="right_col" role="main" style="min-height: 2965px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Situs</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group row pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>






        <div class="row">
            <div class="col-md-12">

                <!-- form datetimepicker -->

                <div class="x_panel" >
                    <div class="x_title">

                        <a class=" text-light  btn bg-defauld btn-sm">Informasi Dasar</a>
                        <span class="text-success"> <?= $this->session->flashdata('pesan'); ?></span>
                       
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="container">
                            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class='form-horizontal form-bordered'>
                                <div class="row">
                                    <div class="col-sm-6">
                                        Nama<?php echo form_error('Nama') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="text" name="Nama" value="<?php echo $Nama; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Gambar Header<?php echo form_error('gambar_header') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker2">
                                                <input type="text" value="<?php echo $gambar_header; ?>" name="gambar_header" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Kunci
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker3">
                                                <textarea class="form-control" rows="3" name="kunci" id="kunci" placeholder="Kunci"><?php echo $kunci; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Addsense <?php echo form_error('addsense') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker4">
                                                <textarea class="form-control" rows="3" name="addsense" id="addsense" placeholder="Addsense"><?php echo $addsense; ?></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Deskripsi<?php echo form_error('deskripsi') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker6">
                                                <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Fans Page<?php echo form_error('fans_page') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker7">
                                                <textarea class="form-control" rows="3" name="fans_page" id="fans_page" placeholder="Fans Page"><?php echo $fans_page; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Map Google<?php echo form_error('map_google') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <textarea class="form-control" rows="3" name="map_google" id="map_google" placeholder="Map Google"><?php echo $map_google; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Verfication<?php echo form_error('verfication') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <textarea class="form-control" rows="3" name="verfication" id="verfication" placeholder="Verfication"><?php echo $verfication; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        Alamat<?php echo form_error('alamat') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Telepone<?php echo form_error('telepone') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="text" class="form-control" name="telepone" id="telepone" placeholder="Telepone" value="<?php echo $telepone; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Email<?php echo form_error('email') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Nama Owner<?php echo form_error('nama_rektor') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="text" class="form-control" name="nama_rektor" id="nama_rektor" placeholder="Nama Owner" value="<?php echo $nama_rektor; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Video Profil<?php echo form_error('video_profil') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="text" class="form-control" name="video_profil" id="video_profil" placeholder="Video Profil" value="<?php echo $video_profil; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Tentang<?php echo form_error('tentang_universitas') ?>
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <textarea class="form-control" rows="3" name="tentang_universitas" id="tentang_universitas" placeholder="Tentang "><?php echo $tentang_universitas; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Favicon <?php echo form_error('favicon') ?>
                                        <img src="<?= base_url('rn/home/img/' . $favicon) ?>" class="p-3 img-responsive" style="width: 100px">
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="file" name="favicon" placeholder="Favicon" value="<?php echo $favicon; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        Logo<?php echo form_error('logo') ?>
                                        <img src="<?= base_url('rn/home/img/' . $logo) ?>" class="p-3 img-responsive" style="width: 100px">
                                        <div class="form-group">
                                            <div class="input-group date" id="myDatepicker">
                                                <input type="file" name="logo" placeholder="Logo" value="<?php echo $logo; ?>">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="hidden" name="id_setting" value="<?php echo $id_setting; ?>">
                                <div class=" item form-group ">
                                    <div class="col-md-12 text-center p-2">
                                            <button type="submit"  class="btn bg-defauld">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /form datetimepicker -->

                <!-- form grid slider -->

                <!-- image cropping -->

            </div>
        </div>
    </div>
</div>