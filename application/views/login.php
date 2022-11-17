<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    Login | Administrator </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi/fax') ?>/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi/fax/bootstrap/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi/fax/dist/css/login.css') ?>">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <?php $data = $this->db->get('setting'); ?>
</head>

<body>
  <div class="main-content-wrapper">
    <div class="login-area">
      <?= $this->session->flashdata('pesan') ?>
      <div class="login-header">
        <h4>LOGIN ADMINISTRATOR PANEL</h4>
        <h2 class="title"><?= strip_tags($data->row()->Nama) ?></h2>
      </div>
      <div class="login-content">
        <form method="post" role="form" id="form_login" action="">
          <div class="form-group">
            <input type="text" class="input-field" name="username" placeholder="Username" required autocomplete="off">
          </div>
          <div class="form-group">
            <input type="password" class="input-field" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary" name="login">Login<i class="fa fa-lock"></i></button>
        </form>
        <hr />

        <div class="login-bottom-links">
          <a href="" class="link">
            <!-- Forgot Your Password ? -->
          </a>
        </div>
      </div>
    </div>
    <div class="image-adrea">  
    </div>
  </div>

  <!--   -->


</body>

</html>