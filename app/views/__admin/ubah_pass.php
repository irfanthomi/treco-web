<?= $this->session->flashdata('pesan') ?>
<form action="" method="POST"> 
<table class="table table-striped">
	<tr><td>Password</td><td><input type="password" name="password" class="form-control"></td></tr>
	<tr><td>Password Ulang</td><td><input type="password" name="password_u" class="form-control"></td></tr>
	<tr><td><input type="submit" name="kirim" class="btn btn-success" value="Edit Password">
	         <input type="reset" name="kirim" class="btn btn-danger" value="Batal"></td><td></td></tr>

</table>
</form>