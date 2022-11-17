<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
<body>

	<div class="container">  
		<h1>HALAMAN RESET PASSWORD</h1>
	<div class="rows"> 
 
<?= $this->session->flashdata('pesan'); ?>

 <?php 
 
  $ts = isset($_GET['ts']) ? $_GET['ts'] : '';
  if ($ts == 'BR') { ?>


  <div class="alert alert-danger">Password berhasil di ubah ke <?= $this->input->post('password') ?> Silahkan Login Untuk Melanjutkan</div>
 
 <hr />
 [ 
 <a href="<?= base_url('Akses') ?>"> Klik Di Sini Utuk Login </a> ]	

<?php
  }else{ 

 if($awl == 'reset'): ?>

<form action="" method="POST">
 <table class="table table-striped">
   <tr><td>Password Lama</td><td><input type="password" name="password_lm" placeholder="password" class="form-control"></td></tr>
    <tr><td>Password Baru</td><td><input type="password" name="password" placeholder="password" class="form-control"></td></tr>
     <tr><td></td><td><input type="submit" name="ubah" class="btn btn-success"></td></tr>
 </table>
</form>
<?php elseif($awl == 'email'): ?>


<form action="" method="POST">
 <table class="table table-striped">
   <tr><td>Email</td><td><input type="email" name="email" placeholder="Email ..." class="form-control"></td></tr>
     <tr><td></td><td><input type="submit" name="kirim" class="btn btn-success"></td></tr>
 </table>
</form>

<?php endif;
  }

 ?>
</div>
</div>

</body>
</html>	