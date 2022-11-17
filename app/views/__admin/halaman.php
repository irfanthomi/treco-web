<?php if($this->session->userdata('level') == "user"): ?>
    <div class="callout callout-info">Level Akses User Biasa Hanya Bisa Di Izinkan Edit Halaman</div>
<?php  else: ?>     
   <?php endif; ?>

   <?= $this->session->flashdata('pesan') ?>
                        <!-- /.panel-heading -->
                         <a href="<?php echo base_url('admin/halaman_tambah'); ?>" class="btn btn-success">Tambah Halaman</a>
                        <div class="panel-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>judul</th>
                                        <th>Admin</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($halaman->result() as $berita):
                                $admin=$this->M_admin->select_where('admin','id_admin',$berita->id_user)->row(); 
                                if (empty($berita->id_user)) {
                                      $da_admin="Tidak ada ";
                                   }else{
                                      $da_admin=$admin->nama;
                                   }   
                                  ?>
                                 <tr>
                                 <td><?php echo $no; ?></td>
                                 <td><?php echo $berita->judul; ?></td>
                                 <td><?php echo ucfirst($da_admin); ?></td>
                                 <td><?php echo tgl_indonesia($berita->tanggal); ?></td>
                                 <td>
<?php if($this->session->userdata('level') == "user"): ?>

<?php  else: ?>    
                                    <a href="<?php echo base_url('admin/halaman_hapus/'.$berita->id_halaman); ?>" class="btn btn-danger">Hapus</a>
   <?php endif; ?>

                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/halaman_edit/'.$berita->id_halaman); ?>" class="btn btn-primary">Edit</a></td>
                                 </tr>

                                 <?php $no++; endforeach; ?>


                                </tbody>


                            </table>
                          

