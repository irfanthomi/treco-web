<?= $this->session->flashdata('pesan') ?>

<?php if($this->session->userdata('level') == "user"): ?>
    <div class="callout callout-info">Level Akses User Biasa Hanya Bisa Di Izinkan Edit </div>
<?php  else: ?>     
   <?php endif; ?>

<a href="<?= base_url('admin/download/add') ?>" class="btn btn-success"><i class="fa fa-edit"></i>Tambah Data</a>
<hr />
 <table id="example1" class="table table-bordered table-striped">
	<thead>  
	<tr>
		<th>No.</th>
		<th>Nama File</th>
		<th>Tanggal Upload</th>
	    <th>Judul File Yang Di Download</th>
		<th>User Download</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
<?php  $no=1; foreach($download->result_array() as $down):
      $admin=$this->db->get_where('admin',array('id_admin'=>$this->session->userdata('id_user'))); 
   ?>
	<tr>
		<td><?= $no ?></td>
		<td><div class="btn btn-info"><a hre="<?= base_url('asset/download/'.$down['nama_file']) ?>" class="pull-right-container" style="font-color:#fff;"><?= ucfirst($down['nama_file']) ?></a></div></td>
		<td><?= tgl_indonesia($down['tanggal_upload']) ?></td>
		<td><?= strip_tags($down['judul_file']) ?></td>
		<td><?= strip_tags($admin->row()->nama) ?></td>
		<td>

<?php if($this->session->userdata('level') == "user"): ?>

<?php  else: ?>    
                                 
	  <a href="<?= base_url('admin/download/delete/'.$down['id_download']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
	<?php endif;  ?>
	 <a href="<?= base_url('admin/download/edit/'.$down['id_download']) ?>" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
	</tr>
<?php $no++;endforeach; ?>

</tbody>
</table>