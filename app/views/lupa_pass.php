
<!doctype html>

<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>
        <?= $judul ?> </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="http://sastra-unes.com/assets/login_page/img/favicon.png">
        <link rel="stylesheet" href="<?= base_url('asset/admin') ?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('asset/admin/bootstrap/font-awesome/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('asset/admin/dist/css/login.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">



<?php $data=$this->db->get('setting'); ?>
    </head>
    <body>
        <div class="main-content-wrapper">
            <div class="login-area">
                 <?= $this->session->flashdata('pesan') ?>
                <div class="login-header">
                    <a href="" class="logo">
                        <img src="<?= base_url('asset/admin/dist/img/logo.png') ?>" height="60" alt="">
                    </a>
                    <h2 class="title"><?= strip_tags($data->row()->Nama) ?> Universitas Ekasakti</h2>
                </div>
                <div class="login-content">

<?php if($depan == "Y"): ?>
<!-- mulai -->
 
        <form method="post" role="form" id="form_login"
            action="">
                        <div class="form-group">
                            <input type="email" class="input-field" name="email" placeholder="Email"
                required autocomplete="off">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="kirim">Login<i class="fa fa-lock"></i></button>
                    </form>
                    <!-- batas  -->
 <?php elseif($depan == "N"): ?>
   
    <form method="post" role="form" id="form_login"
            action="">
                        <div class="form-group">
                            <input type="password" class="input-field" name="pass1" placeholder="Masukan Password"
                required autocomplete="off">
                        </div>


                        <div class="form-group">
                            <input type="password" class="input-field" name="pass2" placeholder="Masukan  Password Baru"
                required autocomplete="off">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="cari">Login<i class="fa fa-lock"></i></button>
                    </form>

<?php endif; ?>

 
                </div>
            </div>
            <div class="image-area"></div>
        </div>

<!--   --> 

    
    </body>
</html>
