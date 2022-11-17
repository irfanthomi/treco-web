<?= $this->session->flashdata('pesan'); ?>
                    <a href="<?php echo base_url('admin/galeri/add'); ?>" class="btn btn-success">Tambah Galeri</a>
                       <hr />
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Album</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($data->result() as $galeri):  
                                $data=$this->db->get_where('album',array('id_album'=>$galeri->album));                        
                                  ?>
                                 <tr>
                                 <td><?php echo $no; ?></td>
                                 <td><?php echo $galeri->judul; ?></td>
                                 <td><img src="<?php echo base_url('/rn/galeri/'.$galeri->foto); ?>" style="width:200px;height:200px">
                                 </td>
                                 <td><?= strip_tags($data->row()->nama_album) ?></td>
                                 <td><?= tgl_indonesia($galeri->tanggal
                                 ); ?></td>
                                 <td>
<?php if($this->session->userdata('level') == "user"): ?>

<?php  else: ?> 

                                    <a href="<?php echo base_url('admin/galeri/delete/'.$galeri->id_galeri); ?>" class="btn btn-danger">Hapus</a>
                                <?php endif; ?>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/galeri/edit/'.$galeri->id_galeri); ?>" class="btn btn-primary">Edit</a></td>
                                 </tr>

                                 <?php $no++; endforeach; ?>


                                </tbody>


                            </table>
                          

                        