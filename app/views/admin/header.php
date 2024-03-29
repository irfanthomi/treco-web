<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="images/favicon.ico" type="image/ico" /> -->

    <title>TRECO | Administrator </title>
    <link src="<?= base_url('assets/vendor') ?>/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- PNotify -->
    <link href="<?= base_url('assets/vendor') ?>/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor') ?>/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor') ?>/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/admin/') ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/admin/') ?>css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/admin/') ?>css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/admin/') ?>css/green.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/admin') ?>/css/menu.css">

    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/admin/') ?>css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('assets/admin/') ?>css/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/admin/') ?>css/daterangepicker.css" rel="stylesheet">
    <script src="<?= base_url('assets/admin/js') ?>/jquery-1.12.3.min.js"></script>

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/admin/') ?>css/custom.css" rel="stylesheet">
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script> -->
    <script src="<?= base_url('assets') ?>/ckeditor/ckeditor.js"></script>
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

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="  navbar nav_title" style="border: 0;">
                        <a href="<?= base_url('admin') ?>"
                            class=" d-flex justify-content-center  align-items-center site_title">
                            <h4 class="m-0">TRECO</h4>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('assets/admin/') ?>images/img.jpg" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Selamat datang,</span>
                            <h2>
                                <?= $this->session->userdata('nama') ?>
                            </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="<?= base_url('admin') ?>"><i class="fa fa-home"></i> Home <span
                                            class="label label-success pull-right"> Dashboard</span></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-edit"></i> Data Informasi <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('admin\kategori') ?>">Kategori</a></li>
                                        <li><a href="<?= base_url('admin\artikel') ?>"> Berita</a></li>
                                        <li><a href="<?= base_url('admin\halaman') ?>"> Halaman</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('admin/menu') ?>"><i class="fa fa-bars"
                                            aria-hidden="true"></i> Menu </a>
                                </li>
                                <li>
                                    <a> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                        Product <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('admin\product') ?>">List product</a></li>
                                        <li><a href="<?= base_url('admin\product_category') ?>">kategori product</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('admin/project') ?>">
                                        <i class="fa fa-cubes" aria-hidden="true"></i>
                                        Project
                                    </a>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Pengaturan <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('admin\seting') ?>">Data Situs</a></li>
                                        <li><a href="<?= base_url('admin\slider') ?>">Slide</a></li>
                                        <li><a href="#">Data User</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">

                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="<?= base_url() ?>" class="pr-2 user-profile" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-eye"></i> Preview Site |
                                </a>
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('assets/admin/') ?>images/img.jpg"
                                        alt=""><?= $this->session->userdata('nama') ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('admin/profil') ?>"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="<?= base_url('admin/keluar') ?>"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                            <!-- <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="<?= base_url('assets/admin') ?>images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="<?= base_url('assets/admin/') ?>images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="<?= base_url('assets/admin/') ?>images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="<?= base_url('assets/admin/') ?>images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->