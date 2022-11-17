<?= $this->session->flashdata('pesan'); ?>
                         <a href="<?php echo base_url('admin/artikel_tambah'); ?>" class="btn btn-success">Tambah Artikel</a>
                         <hr />
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>judul</th>
                                        <th>Gambar</th>
                                        <th>Admin</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($data->result() as $berita):
                        $admin=$this->M_admin->select_where('admin','id_admin',$berita->id_user)->row();
                        $kategori=$this->M_admin->select_where('kategori','id_kategori',$berita->kategori)->row();
                       
                        $hitung=$this->M_admin->select_where('admin','id_admin',$berita->id_user)->num_rows();
                    $hit_kat=$this->M_admin->select_where('kategori','id_kategori',$berita->kategori)->num_rows();                               
                                  ?>
                                 <tr>
                                 <td><?php echo $no; ?></td>
                                 <td><?php echo $berita->judul; ?></td>
                                 <td><img src="<?php 
                                $ada=file_exists("rn/gambar/".$berita->gambar);  
                                if ($ada):
                                    echo base_url("rn/gambar/".$berita->gambar);
                                elseif(!$ada):
                                    echo base_url("rn/admin/dist/img/no-image.jpg");
                                endif;  

                                 ?>" style="width:200px;height:200px">
                                 </td>
                                 <td><?php if($hitung == ""){
                                 echo 'TIDAK ADA DATA';
                                 }else{
                                 echo $admin->nama;
                                 }
                                     ; ?></td>
                                 <td><?php 
                                 if($hit_kat == ""):
                                 echo "Tidak Ada Kategori";
                                 else:

                                 echo $kategori->kategori; 

                                 endif; ?></td>
                                 
                                 <td><?php echo tgl_indonesia($berita->tanggal); ?></td>
                                 <td>
                    <?php if($this->session->userdata('level') == "admin"){ ?>
                                    <a href="<?php echo base_url('admin/artikel_hapus/'.$berita->id_artikel); ?>" class="btn btn-danger">Hapus</a>
                            <?php }else{ } ?>        
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/artikel_edit/'.$berita->id_artikel); ?>" class="btn btn-primary ">Edit</a></td>
                                 </tr>

                                 <?php $no++; endforeach; ?>


                                </tbody>


                            </table>
                          

                        