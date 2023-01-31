 <style type="text/css">
 .blog-listing-post .blog-thumbnail{
      height: 500px;
     
 }
  .navigation-wrapper .primary-navigation-wrapper header .navbar-brand:after{display: none;}
 
 
.youtube-container { display: block; margin: 20px auto; width: 100%; max-width: 600px; border:1px solid #000; }
.youtube-player { display: block; width: 100%; /* assuming that the video has a 16:9 ratio */ padding-bottom: 56.25%; overflow: hidden; position: relative; width: 100%; height: 100%; cursor: hand; cursor: pointer; display: block; }
img.youtube-thumb { bottom: 0; display: block; left: 0; margin: auto; max-width: 100%; width: 100%; position: absolute; right: 0; top: 0; height: auto }
div.play-button { height: 150px; width: 150px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url("http://i.imgur.com/TxzC70f.png") no-repeat; }
#youtube-iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; }


.events.images .event aside{
        padding-left: 490px;
    
    
}

.events.images .event .event-thumbnail .event-image{
    
    height: 265px;
    width: 465px;
    overflow: hidden;
    text-align: center;
    position: relative;
}
     }
 </style>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>">Home</a></li>
        <li class="active">Dosen</li>
    </ol>
</div>
 <!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">    
      <div class="col-lg-12">
                <div id="page-main">
                    <section class="blog-listing" id="blog-listing">
      <div id="page-main">
         <header style="
    background: white;
"><h1><?= strtoupper(strip_tags($judul)) ?></h1></header>
    
    <?php $no=1; foreach($video->result_array() as $vid): ?>
 <div class="col-md-6 col-sm-6">
                                <article class="blog-listing-post">
                                    <figure class="blog-thumbnail">
                                        <figure class="blog-meta"><span class="fa fa-file-text-o"></span><?= $vid['tanggal'] ?></figure>
                                        <div class="image-wrapper">
                                      <div class="youtube-container">
                                      <div class="youtube-player" data-id="<?= $vid['id_yt'] ?>"></div>
                                      </div></div>
                                    </figure>
                                    <aside>
                                        <header>
                                            <a href=""><h3><?= strip_tags($vid['nama']) ?></h3></a>
                                        </header>
                                        <div class="description">
                                           
                                        </div>
                                        <a href="" class="read-more stick-to-bottom">Read More</a>
                                    </aside>
                                </article><!-- /article -->
                            </div><!-- /.col-md-6 -->


 <script>
(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = JWTubeThumb(v[n].dataset.id);
        p.onclick = JWTubeIframe;
        v[n].appendChild(p);
    }
})();
 
function JWTubeThumb(id) {
    return '<img class="youtube-thumb" src="http://i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}
 
function JWTubeIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "http://www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}
</script>
   <?php $no++; endforeach; ?>
           
            </div><!-- /.row -->

                        

                    </section><!-- /.blog-listing -->
                     
                </div><!-- /#page-main -->
                <div class="center">
                        <nav>
                        <?= $page  ?>
                    </nav>
                    </div>
            </div> 
        </div><!-- /.row -->
    </div><!-- /.container -->
 
    

      

