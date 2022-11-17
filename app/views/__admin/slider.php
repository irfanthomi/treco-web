<?= $this->session->flashdata('pesan') ?>

                <a href="<?php echo base_url('admin/slider/add');  ?>" class="btn btn-success">Tambah Slider</a>
                        <hr />
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($slider->result() as $slid):
                                  ?>
                                 <tr>
                                 <td><?php echo $no; ?></td>
                                 <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default<?= $no ?>">
                 Lihat Detail Gambar
              </button>
                                 </td>
                                 <td><?php echo $slid->tanggal_upload; ?></td>
                                 <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/slider/edit/'.$slid->id_slider); ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url('admin/slider/delete/'.$slid->id_slider); ?>" class="btn btn-danger" onclick="return(confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?'))">HAPUS</a> 
                                </td>
                                 </tr>
                                 <?php $no++; endforeach; ?>
                                </tbody>
                            </table>
                          
                             <?php 
                                $no=1;
                                foreach($slider->result() as $slid):
                                  ?>

<div class="modal modal-default fade" id="modal-default<?= $no ?>">
          <div class="modal-dialog" style="width: 100%">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Warning Modal</h4>
              </div>
              <div class="modal-body">
                <img src="<?= base_url('rn/slider/'.$slid->gambar) ?>" class="image-responsive" style="width: 80%;height: 400px">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
 <?php $no++; endforeach; ?>
