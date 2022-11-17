<?= $this->session->flashdata('pesan'); ?>
                    <a href="<?php echo base_url('admin/album/add'); ?>" class="btn btn-success">Tambah Album</a>
                       <hr />
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    	<th>No.</th>
                                    	<th>Judul Album</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $no=1; foreach($sql->result_array() as $data): ?>
                                	<tr>
                                	<td><?= $no ?></td>
                                	<td><?= $data['nama_album'] ?></td>
                                    <td><a href="<?= base_url('admin/album/edit/'.$data['id_album']) ?>" class="btn btn-success">Edit</a>
                                        <a href="<?= base_url('admin/album/delete/'.$data['id_album']) ?>" class="btn btn-success">Hapus</a></td>
                                    </tr>
                                    <?php $no++;endforeach; ?>
                                </tbody>
                            
                            </table>
