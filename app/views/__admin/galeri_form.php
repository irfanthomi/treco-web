<form action="" method="POST" enctype="multipart/form-data"> 
<table class="table table-striped">
	<tr><td>Judul</td><td><input type="text" name="judul" value="<?= $g_judul ?>" class="form-control"></td></tr>
	<tr><td>Album</td><td>
		<select class="form-control" required="" name="album">
			<?php 
			$sql=$this->db->get('album');
		    $no=1;
           foreach($sql->result() as $data_): 
			 ?>
		 <option value="<?= $data_->id_album ?>"><?= $data_->nama_album ?></option>
		 <?php $no++; endforeach; ?>
	</select></td></tr>
	<tr><td>Foto</td><td>
<?php if($aksi == "edit"){ ?>
<img src="<?= base_url('asset/galeri/'.$foto) ?>" class="image-responsive">

<?php }else{ } ?>
		<input type="file" name="galeri" class="form-control"></td></tr>
	<tr><td><input type="submit" name="kirim" value="<?= ucfirst($aksi) ?>" class="btn btn-primary"></td><td></td></tr>
</table>
</form>

<!-- judul
album
foto
tanggal
id_admin -->