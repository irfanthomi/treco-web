<section class="hero hero-page">
    <div style="background: url(<?= base_url('rn/home/') ?>/img/blog-banner.jpg)" class="hero-banner">      
     </div>
  </section>
  <!-- Blog Listings-->
  <section class="blog-listings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
              <li aria-current="page" class="breadcrumb-item active">Pencarian</li>
            </ol>
          </nav>
          <h1><?= ucfirst($judul) ?></h1>

          <?php if($detail->num_rows() == 0){ echo "<div class='alert alert-danger'>Maaf Untuk Saat Ini Pencarian Data Belum Di Temukan .</div>
          <br />
     <a href='".$_SERVER['HTTP_REFERER']."' class='btn btn-danger'>Kembali Ke Halaman Awal</a>

          "; } ?>
          <div class="row">
            <p class="col-lg-8">Berita Pencarian :<?= ucfirst(strip_tags($id)) ?>.</p>
          </div>
          <div class="row mt-5">
            <?php foreach($detail->result_array() as $kat):  ?>  
              <div class="col-md-6">
                <div class="blog-post">
                  <div class="image"><img src="<?= base_url('rn/gambar/'.$kat['gambar']) ?>" alt="Projects aim to help those experiencing mental">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="<?= detail_informasi($kat['id_artikel'],$kat['judul']) ?>" class="btn btn-outline-light">Read More</a></div>
                  </div>
                  <div class="author"><img src="<?= base_url('rn/gambar/'.$kat['gambar']) ?>" alt="author" class="img-fluid"></div>
                  <div class="text bg-gray"><a href="<?= detail_informasi($kat['id_artikel'],$kat['judul']) ?>">
                    <h4 class="text-this"><?= $kat['judul'] ?></h4></a>
                    <ul class="post-meta list-inline">
                      <li class="list-inline-item"><i class="icon-clock-1"></i><?= $kat['tanggal'] ?></li>
                      <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                    </ul>
                    <p><?= character_limiter(strip_tags($kat['judul']),100) ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>  
          </div> 
        </div>

      </div>
    </div>
  </section>