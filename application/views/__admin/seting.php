<div class='row'>
<div class='col-md-12'>
<div class='panel panel-info'>
    <?= $this->session->flashdata('pesan') ?>
    <div class='panel-heading'><?= ucfirst($judul) ?></div>
    <small> * )Unutk Upload File Silahkan Upload Secara Bersamaan</small>

    <div class='panel-wrapper collapse in' aria-expanded='true'>
        <div class='panel-body'>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class='form-horizontal form-bordered'>
                <div class='form-body'> 
                   ** ) Harap Isikan data yang di butuhkan pada form.
                   <br /><br /><br /><br /> 
                   <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('Nama') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Gambar Header<?php echo form_error('gambar_header') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="gambar_header" id="gambar_header" placeholder="Gambar Header" value="<?php echo $gambar_header; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="kunci" class='control-label col-md-3'><b>Kunci<?php echo form_error('kunci') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="kunci" id="kunci" placeholder="Kunci"><?php echo $kunci; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="addsense" class='control-label col-md-3'><b>Addsense<?php echo form_error('addsense') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="addsense" id="addsense" placeholder="Addsense"><?php echo $addsense; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class='control-label col-md-3'><b>Deskripsi<?php echo form_error('deskripsi') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fans_page" class='control-label col-md-3'><b>Fans Page<?php echo form_error('fans_page') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="fans_page" id="fans_page" placeholder="Fans Page"><?php echo $fans_page; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="map_google" class='control-label col-md-3'><b>Map Google<?php echo form_error('map_google') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="map_google" id="map_google" placeholder="Map Google"><?php echo $map_google; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="verfication" class='control-label col-md-3'><b>Verfication<?php echo form_error('verfication') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="verfication" id="verfication" placeholder="Verfication"><?php echo $verfication; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <center>
                        <img src="<?= base_url('rn/home/img/'.$favicon) ?>" class="img-responsive" style="width: 200px">
                    </center>
                    <label for="varchar" class='control-label col-md-3'><b>Favicon<?php echo form_error('favicon') ?></b></label>
                    <div class='col-md-9'>
                        <input type="file" class="form-control" name="favicon" id="favicon" placeholder="Favicon" value="<?php echo $favicon; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <center>
                        <img src="<?= base_url('rn/home/img/'.$logo) ?>" class="img-responsive" style="width: 200px">
                    </center>
                    <label for="varchar" class='control-label col-md-3'><b>Logo<?php echo form_error('logo') ?></b></label>
                    <div class='col-md-9'>
                        <input type="file" class="form-control" name="logo" id="logo" placeholder="Logo" value="<?php echo $logo; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Alamat<?php echo form_error('alamat') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Telepone<?php echo form_error('telepone') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="telepone" id="telepone" placeholder="Telepone" value="<?php echo $telepone; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Email<?php echo form_error('email') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Nama Owner<?php echo form_error('nama_rektor') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="nama_rektor" id="nama_rektor" placeholder="Nama Rektor" value="<?php echo $nama_rektor; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Video Profil<?php echo form_error('video_profil') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="video_profil" id="video_profil" placeholder="Video Profil" value="<?php echo $video_profil; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="tentang_universitas" class='control-label col-md-3'><b>Tentang<?php echo form_error('tentang_universitas') ?></b></label>
                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="tentang_universitas" id="tentang_universitas" placeholder="Tentang "><?php echo $tentang_universitas; ?></textarea>
                    </div>
                </div>
                <input type="hidden" name="id_setting" value="<?php echo $id_setting; ?>" /> 
                <div class='form-actions'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='row'>
                                <div class='col-md-offset-3 col-md-9'>
                                   <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                   <a href="<?php echo site_url('setting') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </form>
       </div>
   </div>
</div>
</div>
</div>
