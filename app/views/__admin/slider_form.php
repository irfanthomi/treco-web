<script>
	$(function() {
		function tampil_form(selektor) {
			if ($(selektor).val() == 'Y') {
				$('.keterangan').show();
			} else if ($(selektor).val() == "T") {
				$('.keterangan').hide();
			}
		}
		tampil_form('#keterangan_y select');

		$('#keterangan_y select').change(function() {
			tampil_form(this);
		});
	});
</script>

<div class="col-lg-12">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label class="control-label" for="inputWarning">File Gambar</label>

			<?php

			if ($aksi == "edit") {
				echo '<img src="' . base_url('asset/slider/' . $gambar) . '" class="img-responsive">';
			} else {

				echo "";
			}
			?>
			<input type="file" class="form-control" name="slider">
		</div>


		<div class="form-group" id="keterangan_y">
			<label class="control-label" for="inputWarning">Buat Keterangan Slider</label>
			<select class="form-control" name="keterangan_y">
				<option value=Y>Tampilkan</option>
				<option value=T>Tidak Tampilkan</option>
			</select>
		</div>



		<div class="keterangan form-group">
			<label class="control-label" for="inputWarning">Judul</label>
			<input type="" name="judul" value="<?= $as ?>" class="form-control">
		</div>

		<div class="keterangan form-group">
			<label class="control-label" for="inputWarning">Isi</label>
			<textarea name="isi" class="form-control" cols="12" row="13"><?= $isi ?></textarea>
		</div>

		<div class="keterangan form-group">
			<label class="control-label" for="inputWarning">URL</label>
			<input type="" name="url" value="<?= $url ?>" class="form-control">
		</div>


		<div class="form-group">
			<button type="submit" name="kirim" class="btn btn-primary"><i class="fa fa-edit"></i><?= strtolower($aksi) ?></button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-disk"></i>Batal</button>
		</div>
</div>
</form>