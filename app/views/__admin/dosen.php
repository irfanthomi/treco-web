 
<?= $this->session->flashdata('pesan') ?>
                         <a href="<?php echo base_url('admin/team/add'); ?>" class="btn btn-success">Tambah Data </a>
                         <hr />
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama </th>
                                        <th>Nik</th>
                                        <th>Riwayat Pendidikan</th>
                                        <th>Foto</th>
                                        <th>Pekerjaan</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($dosen->result() as $dosen):                    
                                  ?>
                                 <tr>
                                 <td><?php echo $no; ?></td>
                                 <td><?php echo $dosen->nama; ?></td>
                                  <td><?php echo $dosen->nip; ?></td>
                                   <td><?=  character_limiter($dosen->riwayat_pendidikan,100); ?></td>
                                 <td><img src="<?php 
                                $ada=file_exists("rn/dosen/".$dosen->foto);  
                                if ($ada):
                                    echo base_url("rn/dosen/".$dosen->foto);
                                elseif(!$ada):
                                    echo base_url("rn/home/images/no-image.jpg");
                                endif;  
                                 ?>" style="width:200px;height:200px">
                                 </td>
                                 <td><?= $dosen->jabatan; ?></td>
                                 <td><?= $dosen->email; ?></td>
                                 <td>
                              <a href="<?php echo base_url('admin/team/delete/'.$dosen->id_dosen); ?>" class="btn btn-danger">Hapus</a>
                              <a href="<?php echo base_url('admin/team/edit/'.$dosen->id_dosen); ?>" class="btn btn-primary">Edit</a></td>
                                 </tr>

                                 <?php $no++; endforeach; ?>

                                </tbody>


                            </table>
                          

                        