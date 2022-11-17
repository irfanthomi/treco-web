<?= $this->session->flashdata('pesan') ?>
<form action="" method="POST"> 
<table class="table table-striped">
	<tr><td>Username</td><td><input type="text" name="username" class="form-control" value="<?= $login->row()->username ?>"></td></tr>
    <tr><td>Password</td><td><input type="password" name="password" class="form-control" placeholder="Masukan Password Anda.."></td></tr>
    <tr><td>Nama</td><td><input type="text" name="nama" class="form-control" value="<?= $login->row()->nama ?>"></td></tr>
    <tr><td><input type="submit" name="kirim" class="btn btn-primary" value="Edit Profil"></td></tr>
</table>
</form>