<style>
.nav-item .active {
    border: solid 1px #e96b56;

}

.kalkulator img {
    width: 160px;
    height: 100px;
}
</style>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h4><?= $judul ?></h4>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class=" contact ">
        <div class="container">
            <!-- <div class=" d-flex justify-content-center">
                <div class="">
                    <a href="https://getbootstrap.com/docs/4.0/components/navs/#tabs" target="_blank">
                        <h1> KALKULATOR TRECO </h1>
                    </a>

                    <hr>
                </div>
            </div> -->
            <ul class="nav  justify-content-center" role="tablist">
                <li class="nav-item">
                    <a href="#info" role="tab" data-toggle="tab" class="p-0 m-2 nav-link active">
                        <div class="info-box kalkulator p-3">
                            <img src="<?= base_url('assets/img/static') ?>/roof.png" alt="">
                            <h3>ATAP</h3>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#ratings" role="tab" data-toggle="tab" class="p-0 m-2 nav-link">
                        <div class="info-box kalkulator p-3">
                            <img src="<?= base_url('assets/img/static') ?>/canopy.png" alt="">
                            <h3>CANOPY</h3>
                        </div>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="info">
                    <div class="row p-5 ">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-4 form-group position-relative">
                                    <input type="number" name="panjang" class="form-control" id="panjang"
                                        placeholder="Panjang" required="">
                                    <small style="top: 11px;right: 21px;"
                                        class="  position-absolute d-flex justify-content-end "><i>Meter</i></small>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0 position-relative">
                                    <input type="number" class="form-control" name="lebar" id="lebar"
                                        placeholder="Lebar" required="">
                                    <small style="top: 11px;right: 21px;"
                                        class="  position-absolute d-flex justify-content-end "><i>Meter</i></small>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0 position-relative">
                                    <input type="number" class="form-control" name="tinggi" id="tinggi"
                                        placeholder="Tinggi" required="">
                                    <small style="top: 11px;right: 21px;"
                                        class="  position-absolute d-flex justify-content-end "><i>Meter</i></small>
                                </div>
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Hitung</button></div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="ratings">
                    <div class="row p-5 ">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-4 form-group position-relative">
                                    <input type="number" name="panjang" class="form-control" id="panjang"
                                        placeholder="Panjang Canopy" required="">
                                    <small style="top: 11px;right: 21px;"
                                        class="  position-absolute d-flex justify-content-end "><i>Meter</i></small>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0 position-relative">
                                    <input type="number" class="form-control" name="lebar" id="lebar"
                                        placeholder="Lebar Canopy" required="">
                                    <small style="top: 11px;right: 21px;"
                                        class="  position-absolute d-flex justify-content-end "><i>Meter</i></small>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0 position-relative">
                                    <input type="number" class="form-control" name="tinggi" id="tinggi"
                                        placeholder="Tinggi Canopy" required="">
                                    <small style="top: 11px;right: 21px;"
                                        class="  position-absolute d-flex justify-content-end "><i>Meter</i></small>
                                </div>
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Hitung</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- ======= Clients Section ======= -->


</main><!-- End #main -->