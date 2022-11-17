<?php if($form == 'y'):
       if ($data == '') {
			$id_link="";
			$link="";
			$judul="";
			$poisi="";
       }else{
			$id_link=$data->row()->id_link;
			$link=$data->row()->link;
			$judul=$data->row()->judul;
			$poisi=$data->row()->posisi;
       }
  ?>
  <form action="" method="POST"> 
<table class="table table-striped">
	<tr><td>Judul Link</td><td><input type="text" name="judul" class="form-control" value="<?= $judul ?>"></td></tr>
	<tr><td>Link /Url</td><td><input type="text" name="link" class="form-control" value="<?= $link ?>"></td></tr>
	<tr><td>Posisi</td><td><select name="posisi" class="form-control">
                          <option value="bottom">Bottom</option>
                          <option value="top">Top</option>
                          <option value="fakultas">Link Listing Jurusan</option>
                          <option value="fasilitas_digital">Link Fasilitas Digital</option>
	</select></td></tr>
    <tr><td></td><td><input type="submit" name="save" class="btn btn-success" value="Simpan Data"></td></tr>
</table>
</form>
<?php elseif($form == 'n'): ?>
 <?= $this->session->flashdata('pesan'); ?>
                    <a href="<?php echo base_url('admin/url_extern/add'); ?>" class="btn btn-success">Tambah Url</a>
                       <hr />
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    	<th>No.</th>
                                    	<th>Posisi Link</th>
                                    	<th>Judul</th>
                                    	<th>Alamat Url</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $no=1; foreach($data->result_array() as $sql): ?>
                                	<tr>
                                	<td><?= $no ?></td>
                                	<td><?= $sql['posisi'] ?></td>
                                	<td><?= $sql['judul'] ?></td>
                                	<td><?= $sql['link'] ?></td>
                                    <td><a href="<?= base_url('admin/url_extern/edit/'.$sql['id_link']) ?>" class="btn btn-danger">Edit</a>
                                        <a href="<?= base_url('admin/url_extern/delete/'.$sql['id_link']) ?>" class="btn btn-success">Hapus</a></td>
                                    </tr>
                                    <?php $no++;endforeach; ?>
                                </tbody>
                            
                            </table>

 <?php endif; ?>
