    <!-- Hero Section-->
    <section class="hero hero-page">
      <div style="background: url(<?= base_url('rn/home/') ?>/img/courses-banner.jpg)" class="hero-banner">       </div>
      <div class="container">
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active">Staff</li>
          </ol>
        </nav>
        <h1>Dosen & Staff</h1>
        <div class="row">
          <p class="col-lg-8">Data dosen dan staff yang berada pada <?= cari('Nama') ?>.</p>
        </div>
      </div>
    </section>
    <!-- Staff Section-->
    <section class="staff bg-gray">
      <div class="container">
        <div class="row">

 <?php $no=1;foreach($dosen->result_array() as $r): ?>
       
 <div class="col-lg-4">
            <div class="staff-member"><img src="<?php 
              $ada=file_exists("rn/dosen/".$r['foto']);  
              if ($ada):
              echo base_url("rn/dosen/".$r['foto']);
              elseif(!$ada):
              echo base_url("rn/home/images/no-image.jpg");
              endif;  

              ?>" alt="<?= $r['nama'] ?>">
              <div class="info">
                <h3 class="h5 teacher mb-0"><?= $r['nama'] ?></h3>
              <span>Instuctor of Computer science</span>
              </div>
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="overlay-inner">
                  <p class="teacher-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." </p><a href="staff-detail.html" class="teacher-name">
                    <h3 class="h5 mb-0 teacher"><?= $r['nama'] ?></h3></a> 
                  <ul class="social list-inline">
                    <li class="list-inline-item"><a href="<?= $r['fb'] ?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    <li class="list-inline-item"><a href="<?= $r['email'] ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-video-camera"></i></a></li>
                  </ul>
                  <p class="teacher-see-profile"><a href="staff-detail.html" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal<?= $no ?>">Detail</a></p>
                </div>
              </div>
            </div>
          </div>


          <?php $no++;endforeach; ?>
          
          <?php $no=1;foreach($dosen->result_array() as $DS): ?>   
          <div class="modal fade" id="myModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 80%">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h3 class="modal-title" id="myModalLabel"><div class="callout callout-info"></div></h3>
                  <h3>Detail Data Dosen</h3>
                </div>
                <div class="modal-body">



                 <table class="table table-bordered table-striped">                        

                  <td colspan="4"><img class="img-fullwidth" src="<?php 
                  $ada=file_exists("rn/dosen/".$DS['foto']);  
                  if ($ada):
                  echo base_url("rn/dosen/".$DS['foto']);
                  elseif(!$ada):
                  echo base_url("rn/home/images/no-image.jpg");
                  endif;  

                  ?>" alt="" style="width: 200px;height: 260px"></td> 
                  <tr><th>Nama Dosen</th><td><?php echo $DS['nama']; ?></td></tr>
                  <tr><th>Nip</th><td><?php echo $DS['nip']; ?></td></tr>
                  <tr><th>riwayat Pendidikan</th> <td><?=  $DS['riwayat_pendidikan']?></td></tr>
                  <tr><th>Jabatan</th><td><?=  $DS['jabatan']?></td></tr>
                  <tr><th>Email</th><td><?=  $DS['email']?></td></tr>
                </table>




              </div>
            </div>
          </div>
        </div>
        <?php $no++;endforeach; ?> 
        <nav><?= $page ?></nav> 
    </div>
  </div> 
</section>
 




