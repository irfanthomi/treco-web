<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TRECO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <meta property="og:image" content="<?= base_url('/rn/home/img/' . cari('favicon')) ?>">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?= base_url('/rn/home/img/' . cari('favicon')) ?>" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/admin/') ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('') ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/sweetAlert6.css" rel="stylesheet">
    <script src=" <?= base_url('assets') ?>/js/sweetAlert6.js"></script>

    <!-- =======================================================
  * Template Name: Eterna - v4.9.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php $setting = $this->db->get('setting')->row();
    ?>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container ">
            <div class="row">
                <div class=" col-md-6">
                    <a href="<?= base_url('') ?>">
                        <div class="logo d-flex ">
                            <img class="py-2" src="<?= base_url('') ?>rn/home/img/logo.png" alt="">
                        </div>
                    </a>
                </div>
                <div class=" d-none d-sm-flex col-md-6  contact-info d-flex align-items-center">
                    <div class=" d-flex contact-info-detail justify-content-center  px-3 border-end">
                        <div class="fs-2 d-flex align-items-center"><i
                                class="bi bi-telephone d-flex align-items-center ms-4"></i></div>
                        <div class=" ms-2">
                            <div><b>+1 5589 55488 55</b></div>
                            <div class="text-muted">
                                <small>Call Center</small>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex contact-info-detail justify-content-center px-3">
                        <div class="fs-2 d-flex align-items-center"><i
                                class="bi bi-whatsapp d-flex align-items-center"></i></div>
                        <div class=" ms-2">
                            <div>
                                <b>contact@example.com
                                </b>
                            </div>
                            <div class="text-muted">
                                <small>WhatsApp</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="border-top d-flex align-items-center">
        <div class="container  d-flex justify-content-between align-items-center">


            <nav id="navbar" class=" navbar">
                <div class="">
                    <?= main_menu('Bottom'); ?>
                </div>

                <i class=" p-2 bi bi-grid-fill mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <div class="box d-flex align-items-center position-relative">
                <div id="mobile-topbar" class="d-flex">
                    <div class="px-1 social-links  d-flex align-items-center">
                        <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>

                </div>
                <form action="/cari" method="POST">
                    <div class="d-flex search ps-4 ">
                        <div class="container-2">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <input name="search" type="search" id="search" placeholder="Search..." />
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </header><!-- End Header -->