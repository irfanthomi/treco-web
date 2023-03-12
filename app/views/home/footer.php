<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class=" d-flex align-items-center col-lg-6">
                    <h4>Our Newsletter</h4>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                    <div>
                        <?= $setting->alamat ?>
                    </div>
                    <strong>WhatsApp :</strong> <?= $setting->telepone ?><br>
                    <strong>Telp. :</strong> <?= $setting->telepone ?><br>
                    <strong>Email :</strong> <?= $setting->email ?><br>
                    </p>
                </div>
                <div class=" col-md-6 footer-info">
                    <h3>Tentang <?= $setting->Nama ?></h3>
                    <p> <?= $setting->tentang_universitas ?></p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Treco</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="<?= base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?= base_url('') ?>assets/vendor/php-email-form/validate.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="<?= base_url('') ?>/assets/js/main1.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>