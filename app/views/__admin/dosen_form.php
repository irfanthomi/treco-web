<form action="" method="POST" enctype="multipart/form-data"> 
<table class="table table-striped">
	<tr><td>Nama </td><td><input type="text" name="nama" value="<?= $nama ?>" class="form-control"></td></tr>
	<tr><td>NIK</td><td><input type="number" name="nip" class="form-control" value="<?= $nip ?>"></td></tr>
	<tr><td>Riwayat Pendidikan</td><td><textarea class="ckeditor form-control" cols="20" rows="20" name="riwayat_pendidikan"><?= $riwayat_pendidikan ?></textarea></td></tr>
	<tr><td>Deskripsi Singkat </td><td><textarea class="ckeditor form-control" cols="20" rows="20" name="deskripsi_singkat"><?= $deskripsi_singkat ?></textarea></td></tr> 
	<tr><td>Foto</td><td>
<?php if($aksi == "edit"){ ?>
<img src="<?= base_url('asset/dosen/'.$foto) ?>" class="image-responsive" style="width: 150px;height: 150px">
 <?php } ?>
		<input type="file" name="dosen" class="form-control"></td></tr>
		<tr><td>Jabatan</td><td><input type="text"  class="form-control" value="<?= $jabatan ?>" name="jabatan"></td></tr>
		<tr><td>Email</td><td><input type="text"  class="form-control" value="<?= $email ?>" name="email"></td></tr>
		<tr><td>Facebook</td><td><input type="text"  class="form-control" value="<?= $fb ?>" name="fb"></td></tr>
	<tr><td><input type="submit" name="kirim" value="<?= ucfirst($aksi) ?>" class="btn btn-primary"></td><td></td></tr>
</table>
</form>

<!-- nama
nip
riwayat_pendidikan
deskripsi_singkat
foto
jabatan
email
fb -->