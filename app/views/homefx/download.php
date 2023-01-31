<section class="hero hero-page">
  <div style="background: url(<?= base_url('rn/home/') ?>/img/blog-banner.jpg)" class="hero-banner">       </div>
</section>
<section class="blogpost-full">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="blog.html">Detail Informasi</a></li>
            <li aria-current="page" class="breadcrumb-item active"><?= $judul ?></li>
          </ol>
        </nav>
        <h2 class="mb-5"><?= $judul ?></h2>
        <div class="text-content"> 
         <table id="example1" class="table table-bordered table-striped">
          <thead>  
            <tr>
              <th>No.</th>
              <th>Nama File</th>
              <th>Format</th>
              <th>Tanggal Upload</th>
              <th>Di Upload Oleh</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 

            $no=1; foreach($download->result_array() as $down):
            $nama=(strip_tags($down['nama'])) ? strip_tags($down['nama']) : 'Admin';
            $type=substr($down['nama_file'],-4);
            ?>
            <tr>
              <td><?= $no ?></td>
              <td><div class="btn btn-info"><a hre="" class="pull-right-container" style="font-color:#fff;"><?= ucfirst($down['judul']) ?></a></div></td>
              <td><?= $type ?></td>
              <td><?= tgl_indonesia($down['tanggal_upload']) ?></td>
              <td><?= $nama ?></td>
              <td>
               <a href="<?= base_url('home/download_aksi/'.$down['id_download']) ?>" class="btn btn-info" ><i class="fa fa-download"></i></a></td>
             </tr>
             <?php $no++;endforeach; ?>
           </tbody>
         </table>


         <script src="<?= base_url('rn/sembunyi') ?>/plugins/datatables.net-bs/js/jquery.dataTables.min.js"></script> 
         <script src="<?= base_url('rn/sembunyi') ?>/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


         <script type="text/javascript">

          $(function () {

            $('#example1').DataTable()
            $('#example2').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false
            })
          });


        </script>
      </div> 
    </div>
  </div>
</div>
</div>
</section>