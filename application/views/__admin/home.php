  <script src="<?= base_url('rn\home\js') ?>\highcharts.js"></script>
  <script src="<?= base_url('rn\home\js') ?>\exporting.js"></script>
  <script src="<?= base_url('rn\home\js') ?>\export-data.js"></script>


  <?= $this->session->flashdata('msg') ?>
  <div class="row">
    <br /><br />
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $informasi->num_rows() ?></h3>
          <p>Jumlah Informasi</p>
        </div>
        <div class="icon">
          <i class="fa fa-database"></i>
        </div>
        <a href="<?= base_url('admin/artikel') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= $halaman->num_rows()  ?></h3>
          <p>Jumlah Halaman</p>
        </div>
        <div class="icon">
          <i class="fa fa-laptop"></i>
        </div>
        <a href="<?= base_url('admin/halaman') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $kategori->num_rows()  ?></h3>
          <p>Jumlah Kategori Berita</p>
        </div>
        <div class="icon">
          <i class="fa fa-laptop"></i>
        </div>
        <a href="
        <?php if ($this->session->userdata('level') == "user") : ?>
          <?php else : ?> 
            <?= base_url('admin/kategori') ?>
          <?php endif; ?>

          " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $download->num_rows()  ?></h3>
          <p>Jumlah File Download</p>
        </div>
        <div class="icon">
          <i class="fa fa-laptop"></i>
        </div>
        <a href="<?= base_url('admin/download') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <!-- ./col -->
  <hr />
  <br />
  <div class="row"><div class="col-md-6">

<div id="container" ></div>

</div>
<div class="col-md-6">
<div class="box box-primary">
  <div class="box-header">
    <i class="ion ion-clipboard"></i>
    <h3 class="box-title">Artikel Baru Di Tambahkan</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
    <ul class="todo-list">
      <?php $no = 1;
      foreach ($home_admin as $artHome) {
        $warna = ($no % 2) ? '#00c0ef !important' : '#65cc65';
      ?>
        <li style="color: #000">
          <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
          </span>
          <input type="checkbox" value="">
          <span class="text"><?= strip_tags(ucfirst(strtolower($artHome->judul))) ?></span>
          <small class="label label-info"><i class="fa fa-clock-o"></i><?= tgl_indonesia($artHome->tanggal) ?></small>
          <div class="tools">
            <a href="<?= detail_informasi($artHome->id_artikel, seo($artHome->judul)) ?>" target="_blank"><i class="fa fa-eye"></i></a>
          </div>
        </li>
      <?php $no++;
      } ?>
    </ul>
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix no-border">
    <a href="<?= base_url('admin/artikel_tambah') ?>" type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i>Tambah Artikel</a>
  </div>
</div>

</div></div>


  <script type="text/javascript">
    $(function() {
      var options = {
        chart: {
          renderTo: 'container',
          type: 'spline'
        },
        title: {
          text: 'Data Halaman Dari Dari Tahun <?= $awal ?> S/d <?= $sampai ?>',
          x: -20 //center
        },
        subtitle: {
          text: 'Website Resmi <?= cari('Nama') ?>',
          x: -20
        },
        yAxis: {
          title: {
            text: 'Jumlah Periode Berdasarkan Tahun'
          },
          plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
          }]
        },
        tooltip: {
          valueSuffix: 'Dalam Satuan Angka'
        },
        legend: {
          layout: 'vertical',
          align: 'right',
          verticalAlign: 'middle',
          borderWidth: 0
        }
      };
      var url = "<?= base_url('admin/ajax_artikel') ?>";
      $.getJSON(url, function(data) {
        options.series = data.series;
        options.xAxis = data.xAxis;
        var chart = new Highcharts.Chart(options);
      });
    });
  </script>