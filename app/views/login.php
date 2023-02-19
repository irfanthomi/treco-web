<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Login | Administrator </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets/mdb/css') ?>/mdb.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <?php $data = $this->db->get('setting'); ?>
</head>
<style>
html {
    height: 100%;
}

.form-outline .form-control:focus~.form-label {
    color: rgba(0, 0, 0, .6);
    background: white;
    /* padding: 3px 7px; */
}

.gradient-custom-2 {
    /* fallback for old browsers */
    background: #fccb90;
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

.form-outline .form-control~.form-label {
    background-color: white;
}

@media (min-width: 768px) {
    .gradient-form {
        height: 100vh !important;
    }
}

@media (min-width: 769px) {
    .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
    }
}
</style>

<body class=" h-100">
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-4">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="card-body p-md-2 mx-md-2">
                                <div class=" pb-4 pt-5 px-4 text-center">
                                    <img src="<?= base_url('') ?>rn/home/img/logo.png" width="100%" alt="logo">
                                </div>
                                <div class=" text-center">
                                    <span> Administrator</span>
                                </div>
                                <form method="post" role="form" id="form_login" action="" class="p-4">
                                    <small class="my-4">
                                        <?= $this->session->flashdata('pesan') ?>
                                    </small>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" id="form2Example11"
                                            class=" border form-control" />
                                        <label class="form-label" for="form2Example11">Username</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form2Example22"
                                            class="fa-sm border form-control" />
                                        <label class="form-label" for="form2Example22">Password</label>
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-danger btn-block  gradient-custom-2 p-3 mb-3"
                                            type="submit" name="login"><span class=" fa-mdp-3">Log
                                                in</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="<?= base_url('assets/mdb/js') ?>/mdb.min.js"></script>

</html>