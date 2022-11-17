    <section class="hero hero-page">
      <div style="background: url(<?= base_url('rn/home/') ?>/img/blog-banner.jpg)" class="hero-banner">       </div>
    </section>
    <section class="blogpost-full">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Detail Informasi</a></li>
                <li aria-current="page" class="breadcrumb-item active"><?= $judul ?></li>
              </ol>
            </nav>
            <h2 class="mb-5"><?= $detail->row()->judul ?></h2>
            <p><img src="<?= base_url('rn/gambar/'.$detail->row()->gambar) ?>" alt="..." class="img-fluid"></p>
            <div class="post-meta d-flex align-items-center flex-wrap">   
              <div class="author d-flex align-items-center">
                <div class="avatar"><img src="<?= base_url('rn/gambar/'.$detail->row()->gambar) ?>" alt="" class="img-fluid"></div><a href="#" class="name no-anchor-style"> <i class="fa fa-user"></i> <?= $detail->row()->nama ?></a>
              </div>
              <div class="date"><i class="fa fa-calendar"></i><?= ucfirst($detail->row()->tanggal) ?></div>
            </div>
            <div class="text-content"> 
              <?= $detail->row()->isi ?>
            </div>
            <div class="post-footer mt-5">
              <div class="row">
                <div class="col-lg-12 d-flex flex-wrap align-items-center">
                  <ul class="social-buttons list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="twitter d-flex mb-0">
                      <div class="icon">                   
                        <i class="fa fa-twitter"></i></div>
                        <div class="text text-enter"><strong>Share Post</strong></div></a></li>
                        <li class="list-inline-item"><a href="#" class="facebook d-flex mb-0">
                          <div class="icon">                   <i class="fa fa-facebook"></i></div>
                          <div class="text text-enter"><strong>Share Post</strong></div></a></li>
                          <li class="list-inline-item"><a href="#" class="google-plus d-flex mb-0">
                            <div class="icon">                   <i class="fa fa-google-plus"></i></div>
                            <div class="text text-enter"><strong>Share Post</strong></div></a></li>
                          </ul>
                        </div>
                        
                      </div>
                    </div>
                    <div class="post-author mt-5">
                      <div class="d-flex">
                        <div class="avatar"><img src="../../../d19m59y37dris4.cloudfront.net/university/1-1-1/img/avatar-2.jpg" alt="..." class="img-fluid"></div>
                        <div class="info d-flex justify-content-between">
                          <div class="left"><small>Posted by</small><strong><?= $detail->row()->nama ?></strong></div>
                          <div class="right d-none d-sm-block">
                            <ul class="list-inline social">
                              <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                              <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div id="disqus_thread"></div>
                      <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
  var d = document, s = d.createElement('script');
  s.src = 'https://http-sayidansar-unespadang-ac-id.disqus.com/embed.js';
  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                      
                    </div>

                  </div>
                  <div class="col-lg-4">
                    <!-- sidebar-->
                    <div class="blog-sidebar">
                      <div class="widget search">
                        <div class="widget-header"><strong>Search</strong></div>
                        <div class="widget-body">
                          <form action="<?= base_url('home/pencarian_informasi') ?>" method="POST">
                            <div class="form-group mb-0">
                              <input type="search" name="kata" placeholder="Enter your keyword">
                              <button type="submit"> <i class="fa fa-search"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="widget social border-0 pd-0">
                        <ul class="social-buttons list-unstyled">
                          <li><a href="#" class="twitter d-flex">
                            <div class="icon">                   <i class="fa fa-twitter"></i></div>
                            <div class="text d-flex justify-content-between">
                              <div class="left"><strong>120K</strong><span>Followers</span></div>
                              <div class="right"><strong>Twitter</strong></div>
                            </div></a></li>
                            <li><a href="#" class="facebook d-flex">
                              <div class="icon">                   <i class="fa fa-facebook"></i></div>
                              <div class="text d-flex justify-content-between">
                                <div class="left"><strong>120K</strong><span>Likes</span></div>
                                <div class="right"><strong>Facebook</strong></div>
                              </div></a></li>
                              <li><a href="#" class="google-plus d-flex">
                                <div class="icon">                   <i class="fa fa-google-plus"></i></div>
                                <div class="text d-flex justify-content-between">
                                  <div class="left"><strong>120K</strong><span>Followers</span></div>
                                  <div class="right"><strong>Google Plus</strong></div>
                                </div></a></li>
                                <li><a href="#" class="vimeo d-flex">
                                  <div class="icon">                   <i class="fa fa-vimeo"></i></div>
                                  <div class="text d-flex justify-content-between">
                                    <div class="left"><strong>120K</strong><span>Subscribers</span></div>
                                    <div class="right"><strong>Vimeo</strong></div>
                                  </div></a></li>
                                  <li><a href="#" class="youtube d-flex mb-0">
                                    <div class="icon">                   <i class="fa fa-youtube-play"></i></div>
                                    <div class="text d-flex justify-content-between">
                                      <div class="left"><strong>120K</strong><span>Subscribers</span></div>
                                      <div class="right"><strong>Youtube</strong></div>
                                    </div></a></li>
                                  </ul>
                                </div>
                                <div class="widget categoris">
                                  <div class="widget-header"><strong>Categories</strong></div>
                                  <div class="widget-body">
                                    <ul class="categoris-list list-unstyled">
                                      <?php $no=1; foreach($kategori->result_array() as $kat): ?>
                                      <li><a href="<?= url_kategori($kat['id_kategori'],seo($kat['nama_kategori'])) ?>" class="d-flex align-items-end justify-content-between"><strong><?= ucfirst($kat['nama_kategori']) ?></strong><strong><?= $kat['jumlah'] ?></strong></a></li>
                                      <?php $no++; endforeach; ?> 
                                    </ul>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </section>