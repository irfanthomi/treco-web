<table class="table table-striped">
<form action="" method="POST" enctype="multipart/form-data"> 
	<?php  
     if ($aksi == "edit") {
    ?>
    <tr><td>Detail Download File</td><td><?= $nama_file ?></td></tr>
    <tr><td>Di Upload Pada</td><td><span class="label pull-right bg-green"><?= $tanggal_upload ?></span></td></tr>

    <?php 
       
     }
	?>
	<tr><td>File</td><td><input type="file" name="gambar" class="form-control" required=""></td></tr>
    <tr><td>Judul /Nama File</td><td><input type="text" name="judul_file" class="form-control" required="" value="<?= $judul_file ?>"></td></tr>
	<tr><td><button type="submit" name="kirim" class="btn btn-info"><i class="fa fa-edit"></i><?= ucfirst($aksi) ?></button></td><td></td></tr>
</form>
</table>

<!-- nama_file
tanggal_upload
id_admin -->