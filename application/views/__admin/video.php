
                        <!-- /.panel-heading -->
                        <?= $this->session->flashdata('pesan') ?>
                         <a href="<?php echo base_url('admin/video_tambah'); ?>" class="btn btn-success">Tambah Vdeo Url Youtube</a>
                        <div class="panel-body">
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Url</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($video->result() as $tag_i):
                                  ?>
                                 <tr>
                                 <td><?php echo $no; ?></td>
                                 <td><?php echo $tag_i->url; ?></td>
                                 <td><?php echo $tag_i->nama; ?></td>
                                  <td><?php  
                                  if ($tag_i->tanggal == "0000-00-00"){
                                      echo "Format Tanggal Kosong";
                                  }else{
                                  tgl_indonesia($tag_i->tanggal);
                                  } 

                                  ?></td>
                                 
                                 <td>
<?php if($this->session->userdata('level') == "user"): ?>

<?php  else: ?>    
                                  <a href="<?php echo base_url('admin/video_hapus/'.$tag_i->id_video); ?>" class="btn btn-danger">Hapus</a>

                                <?php endif; ?>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/video_edit/'.$tag_i->id_video); ?>" class="btn btn-primary">Edit</a>
                             &nbsp;&nbsp;&nbsp;&nbsp;
                             <?php if($tag_i->tampil_depn == 'N'){ ?>
                             <a href="<?php echo base_url('admin/video_set/'.$tag_i->id_video); ?>" class="btn btn-primary">Tampilkan Di Depan</a>
                             <?php }elseif($tag_i->tampil_depn == 'Y'){ ?>
                              <a href="<?php echo base_url('admin/video_set/'.$tag_i->id_video); ?>" class="btn btn-warning">Video Ini Di Tampilkan Di Depan</a>
                             <?php } ?>
                              </td>
                                 </tr>

                                 <?php $no++; endforeach; ?>


                                </tbody>


                            </table>
                          


