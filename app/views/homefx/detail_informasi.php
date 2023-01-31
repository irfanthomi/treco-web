<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="<?= base_url('rn/gambar/' . $detail->row()->gambar) ?>" alt="" class="img-fluid">
                        </div>
                        <h2 class="entry-title">
                            <a href="blog-single.html"><?= $detail->row()->judul ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i>
                                    <a href="blog-single.html"><?= $detail->row()->user ?></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                        href="blog-single.html"><time
                                            datetime="<?= ucfirst($detail->row()->tanggal) ?>"><?= ucfirst($detail->row()->tanggal) ?></time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a
                                        href="blog-single.html">| <?= $detail->row()->kat ?></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>
                                <?= $detail->row()->isi ?></p>
                        </div>



                    </article><!-- End blog entry -->


                    <!-- End blog comments -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>

                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Kategori</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php foreach ($kategori->result_array() as $kat) : ?>
                                <li><a href="#"><?= $kat['nama_kategori'] ?> <span>(<?= $kat['jumlah'] ?>)</span></a>
                                </li>
                                <?php endforeach; ?>

                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">

                            <?php foreach ($latest->result_array() as $lat) : ?>
                            <div class="post-item clearfix">
                                <img src="<?= base_url('rn/gambar/' . $lat['gambar']) ?>" style="
    height: 60px;
    object-fit: cover;
" alt="">
                                <h4><a
                                        href="<?= detail_informasi($lat['id_artikel'], $lat['judul']) ?>"><?= $lat['judul'] ?></a>
                                </h4>
                                <time
                                    datetime="<?= date('d M Y', strtotime($lat['tanggal'])) ?>"><?= date('d M Y', strtotime($lat['tanggal'])) ?></time>
                            </div>
                            <?php endforeach; ?>

                        </div><!-- End sidebar recent posts-->



                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->