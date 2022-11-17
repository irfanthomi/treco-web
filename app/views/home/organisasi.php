<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">
                        Home
                    </a></li>
                <li>
                    <?= $page ?>
                </li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <h2>
                    PEMBINA
                </h2>
            </div>
            <div class="row">
                <?php $no = 1;
                foreach ($team_pembina->result_array() as $r) : ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <a href="" data-toggle="modal" data-target="#myModal<?= $r['id_team'] ?>">
                            <img src="<?php
                                            $ada = file_exists("rn/team/" . $r['foto']);
                                            if ($ada) : echo base_url("rn/team/" . $r['foto']);
                                            elseif (!$ada) : echo base_url("rn/home/images/no-image.jpg");
                                            endif; ?>" alt="">
                        </a>
                        <a href="" data-toggle="modal" data-target="#myModal<?= $r['id_team'] ?>">
                            <h4>
                                <?= $r['nama']; ?>
                            </h4>
                        </a>
                        <span>
                            <?= $r['jb'] ?>
                        </span>
                        <p>
                            <?= $r['email'] ?>
                        </p>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <?php $no++;
                endforeach; ?>
            </div>
            <div class="row d-flex justify-content-center">
                <h2>
                    PENGARURUS
                </h2>
            </div>
            <div class="row">
                <?php $no = 1;


                foreach ($team_pengurus->result_array() as $r) : ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <a href="" data-toggle="modal" data-target="#myModal<?= $r['id_team'] ?>">
                            <img src="<?php
                                            $ada = file_exists("rn/team/" . $r['foto']);
                                            if ($ada) : echo base_url("rn/team/" . $r['foto']);
                                            elseif (!$ada) : echo base_url("rn/home/images/no-image.jpg");
                                            endif; ?>" alt="">
                        </a>
                        <a href="" data-toggle="modal" data-target="#myModal<?= $r['id_team'] ?>">
                            <h4>
                                <?= $r['nama']; ?>
                            </h4>
                        </a>
                        <span>
                            <?= $r['jb'] ?>
                        </span>
                        <p>
                            <?= $r['email'] ?>
                        </p>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <?php $no++;
                endforeach; ?>
            </div>




        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->

<?php $no = 1;
foreach ($team->result_array() as $DS) : ?>
<div class="modal fade" id="myModal<?= $DS['id_team'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <div class="callout callout-info"></div>
                </h3>
            </div>
            <div class="modal-body">



                <table>

                    <td colspan="4"><img class="img-fullwidth" src="<?php
                                                                        $ada = file_exists("rn/team/" . $DS['foto']);
                                                                        if ($ada) : echo base_url("rn/team/" . $DS['foto']);
                                                                        elseif (!$ada) : echo base_url("rn/home/images/no-image.jpg");
                                                                        endif; ?>" alt=""
                            style="width: 200px;height: 260px"></td>
                    <tr>
                        <th>Nama </th>
                        <td>
                            <?php echo $DS['nama']; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nik</th>
                        <td>
                            <?php echo $DS['nip']; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>riwayat Pendidikan</th>
                        <td>
                            <?= $DS['riwayat_pendidikan'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>
                            <?= $DS['jabatan'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <?= $DS['email'] ?>
                        </td>
                    </tr>
                </table>




            </div>
        </div>
    </div>
</div>
<?php $no++;
endforeach; ?>