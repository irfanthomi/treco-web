<?= $this->session->flashdata('pesan'); ?>
<a href="<?php echo base_url('admin/galeri/add'); ?>" class="btn btn-success">Tambah Galeri</a>
<hr />


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Halaman</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">

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
                        $no = 1;
                        foreach ($data->result() as $galeri) :
                            $data = $this->db->get_where('album', array('id_album' => $galeri->album));
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $galeri->judul; ?></td>
                            <td><img src="<?php echo base_url('/rn/galeri/' . $galeri->foto); ?>"
                                    style="width:200px;height:200px">
                            </td>
                            <td><?= strip_tags($data->row()->nama_album) ?></td>
                            <td><?= tgl_indonesia(
                                        $galeri->tanggal
                                    ); ?></td>
                            <td>
                                <?php if ($this->session->userdata('level') == "user") : ?>

                                <?php else : ?>

                                <a href="<?php echo base_url('admin/galeri/delete/' . $galeri->id_galeri); ?>"
                                    class="btn btn-danger">Hapus</a>
                                <?php endif; ?>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a
                                    href="<?php echo base_url('admin/galeri/edit/' . $galeri->id_galeri); ?>"
                                    class="btn btn-primary">Edit</a>
                            </td>
                        </tr>

                        <?php $no++;
                        endforeach; ?>


                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div>