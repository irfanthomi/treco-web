<?php $Pengaturan = $this->db->get('setting'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('rn/sembunyi/images/' . $Pengaturan->row()->favicon) ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi') ?>/bootstrap/css/bootstrap4.min.css">
  <script src="<?= base_url() ?>rn/ckeditor/ckeditor.js"></script>
  <script src="<?= base_url() ?>rn/ckeditor/styles.js"></script>
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi/bootstrap/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi') ?>/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi') ?>/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" />
  <link href='<?= base_url('rn/home/img/' . seting('favicon')) ?>' rel='icon' type='image/x-icon' />
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi') ?>/dist/css/responsive_tbl.css">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi') ?>/dist/css/skins/_all-skins.min.css">
  <script src="<?= base_url('rn/sembunyi/dist/js/jquery-1.12.3.min.js') ?>"></script>
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi/dist') ?>/css/datepicker.css">
  <link rel="stylesheet" href="<?= base_url('rn/sembunyi/dist') ?>/css/menu.css">
  <link rel="stylesheet" href="<?= base_url('rn') ?>/home/css/sweet-alert.css">
  <script src="<?= base_url('rn') ?>/home/js/sweetalert.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<script type="text/javascript">
  function keluar() {
    swal({
        title: "Anda Yakin Untuk Keluar?",
        text: "Keluar Dari Halaman Administrator Untuk Mengakhiri Session Anda ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Sedang mengalihkan", {
            icon: "success",
          });
          window.location.href = "<?= base_url('admin/keluar') ?>";
        } else {

          swal({
            title: "Anda Membatalkan Keluar Dari Halaman Administrator",
            icon: "success",
            button: "Tutup Dialog",
          });
        }
      });
  }
</script>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <?php $data = $this->db->get('setting'); ?>
      <a href="" class=" logo" style="background: #000">
        <span class="logo-mini"><b>A</b>DM</span>
        <span class="logo-lg"><b>ADMINISTRATOR <?= $data->row()->Nama ?></b></span>
      </a>
      <nav class="p-0 navbar navbar-static-top" style="background: #000">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <?php $Data_user = $this->db->get_where('admin', array('id_admin' => $this->session->userdata('id_admin'))); ?>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <div>
              <a href="<?= base_url() ?>" target="_blank"> <i class="fa fa-eye"></i>Preview Site</a>
            </div>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?= ucfirst($this->session->userdata('username')) ?>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->

                <li class="user-header">
                  <p>
                    <?= $this->session->userdata('username') ?>
                    <small>Login Terakhir Anda <?= $this->session->userdata('log') ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">

                </li>
                <!-- Menu Footer-->
                <li class="user-footer">

                  <div class="pull-left">
                    <a href="<?= base_url('admin/profil') ?>" class="btn btn-default btn-flat">Edit Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('admin/keluar') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>

          <li>
            <a href="<?= base_url('admin') ?>">
              <i class="fa fa-home"></i>
              <span>Beranda</span>
            </a>
          </li>

          <?php if ($this->session->userdata('level') == "admin") : ?>
            <li class="treeview">
              <a href="">
                <i class="fa fa-list-ol"></i>
                <span>Data Informasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\kategori') ?>"><i class="fa fa-circle-o"></i>Kategori</a></li>
                <li><a href="<?= base_url('admin\artikel') ?>"><i class="fa fa-circle-o"></i>Berita</a></li>
                <li><a href="<?= base_url('admin\halaman') ?>"><i class="fa fa-circle-o"></i>Halaman</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-video-camera"></i>
                <span>Data Menu </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\menu') ?>"><i class="fa fa-circle-o"></i> Data Menu Dropdown</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="">
                <i class="fa fa-user-plus"></i>
                <span>Data Team dan Staf</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\team') ?>"><i class="fa fa-circle-o"></i> Data Team</a></li>

              </ul>
            </li>





            <li class="treeview">
              <a href="">
                <i class="fa fa-download"></i>
                <span>Data Slide Show</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\slider') ?>"><i class="fa fa-circle-o"></i> Data Slide Show</a></li>
                <li><a href="<?= base_url('testimonial') ?>"><i class="fa fa-circle-o"></i> Data Testimoni</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="">
                <i class="fa fa-wrench"></i>
                <span>Data Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url('widget'); ?>"><i class="fa fa-circle-o"></i> Data Widget </a></li>
                <li><a href="<?php echo base_url('admin/user'); ?>"><i class="fa fa-circle-o"></i> Data Hak Akses</a></li>
                <li><a href="<?php echo base_url('admin/seting'); ?>"><i class="fa fa-circle-o"></i> Data Pengaturan</a></li>

              </ul>
            </li>

            <li class="treeview">
              <a href="">
                <i class="fa fa-download"></i>
                <span>Data Download</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\download') ?>"><i class="fa fa-circle-o"></i> Data Download</a></li>

              </ul>
            </li>

            <li class="treeview">
              <a href="">
                <i class="fa fa-video-camera"></i>
                <span> Geleri Foto & Kegiatan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\galeri') ?>"><i class="fa fa-circle-o"></i> Data Galeri</a></li>
                <li><a href="<?= base_url('admin\galeri') ?>"><i class="fa fa-circle-o"></i> Data Album galeri</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="">
                <i class="fa fa-video-camera"></i>
                <span>Setting Link Eksternal</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('link_ex') ?>"><i class="fa fa-circle-o"></i>Widget Depan.</a></li>
                <li><a href="<?= base_url('admin\url_extern') ?>"><i class="fa fa-circle-o"></i>Url External</a></li>
              </ul>
            </li>

          <?php elseif ($this->session->userdata('level') == "user") : ?>
            <li class="treeview">
              <a href="">
                <i class="fa fa-list-ol"></i>
                <span>Data Informasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\artikel') ?>"><i class="fa fa-circle-o"></i>Berita</a></li>
                <li><a href="<?= base_url('admin\halaman') ?>"><i class="fa fa-circle-o"></i>Halaman</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="">
                <i class="fa fa-download"></i>
                <span>Data Download</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\download') ?>"><i class="fa fa-circle-o"></i> Data Download</a></li>

              </ul>
            </li>




            <li class="treeview">
              <a href="">
                <i class="fa fa-video-camera"></i>
                <span>Data Geleri Foto Dan Kegiatan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\galeri') ?>"><i class="fa fa-circle-o"></i> Data Galeri</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="">
                <i class="fa fa-video-camera"></i>
                <span>Data Dosen</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?= base_url('admin\galeri') ?>"><i class="fa fa-circle-o"></i> Data Galeri</a></li>
              </ul>
            </li>



          <?php endif; ?>
        </ul>

      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content" style="background:  #fff;">
        <div class="row">
          <div class="col-md-12">
            <div class="">
              <div class="callout callout-warning" style="height: 50px">
                <div class="col-md-8">
                  <h4> <i class="fa fa-share"></i><?= $judul ?></h4>
                </div>
                <div class="col-md-4">
                  <marquee>SELAMAT DATANG DI HALAMAN ADMINISTRASI IDM (Ikatan Dosen Menulis) : <?= $this->session->userdata('level') ?></marquee>
                </div>
              </div>