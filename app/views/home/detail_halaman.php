<!-- <section class="hero hero-page">
  <div style="background: url(../../../../assets/bgunes.jpg)  left fixed;
  background-size: cover;
  background-color: yellowgreen;" class="hero-banner">       
  <div class="ds"style="background: #000000c2; height: 201px;">
    <div class="col-md-12" style="padding: 80px;">
          <div class="  text-center">
            <h4 class="breadcrumb-item"><a href="<?= base_url() ?>">Home/</a> <span aria-current="page" class=" text-white active"><?= $judul ?></span></h4>
          </div>
    </div>

  </div>

</div>
</section> -->
<section class="blogpost-full mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li aria-current="page" class="breadcrumb-item active">
                            <?= $judul ?>
                        </li>
                    </ol>
                </nav>
                <h2 class="mb-5 text-center">
                    <?= $detail->row()->judul ?>
                </h2>
                <div class="entry-img">
                    <!-- <img src="/rn/img/<?= $detail->row()->gambar ?>" alt="" class="img-fluid"> -->
                </div>
                <div class="text-content" style="text-align: justify;">
                    <?= $detail->row()->isi ?>
                </div>

            </div>
</section>