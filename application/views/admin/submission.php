<div class="right_col" role="main" style="min-height: 1288px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data/ <small>Submission</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                        <a class=" disabled text-light collapse-link btn bg-defauld btn-sm">Tambah Submission</a>
                        <span class="text-success"> &nbsp; <?= $this->session->flashdata('pesan'); ?></span>
                       
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="display: none;">
                        <form action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label  col-md-2 label-align" for="first-name">Nama <span class="required">*</span>
                                </label>
                                <div class="col-md-10 ">
                                    <input type="text" name="judul" required="required" class="form-control ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">


                        <!-- start project list -->
                        <table class="table table-striped table-responsive jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th style="width: 1%">#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. HP</th>
                                    <th>Afiliasi</th>
                                    <th>Journal</th>
                                    <th>Artikel</th>
                                    <th colspan="2" class="text-center" style="width: 20%">#Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($submit as $s) :
                                ?>
                                    <tr>
                                        <td> <?= $no ?> </td>
                                        <td><?= $s['nama'] ?></td>
                                        <td><?= $s['email'] ?></td>
                                        <td><?= $s['no_hp'] ?></td>
                                        <td><?= $s['afiliasi'] ?></td>
                                        <td><?= $s['journal'] ?></td>
                                        <td class="p-1"> <a  title="<?=$s['artikel']?>" href="<?= base_url('rn/file_submission/')?><?= $s['artikel'] ?> " download class="btn d-flex justify-content-center align-items-center bg-defauld btn-sm"><i class="fa fa-download" aria-hidden="true"></i> &nbsp;<small> Unduh</small></a>  </td>
                                        <td class="text-center p-1">
                                            <a href="<?php echo base_url('admin/submission_edit/' . $s['id_submission']); ?>" class="btn disabled btn-info btn-sm"><i class="fa fa-pencil"></i> </a>
                                        </td>
                                        <td class="text-center p-1">
                                            <a href="<?php echo base_url('admin/submission_hapus/' . $s['id_submission']); ?>" class="btn  btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>


                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>