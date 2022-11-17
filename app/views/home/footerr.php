

<div id="tm-block-footer">
    <div class="uk-container uk-container-center">
      <section class=" tm-block-footer uk-grid uk-grid-match uk-grid-collapse" data-uk-grid-match="{target:&#39;&gt; div &gt; .uk-panel&#39;}" data-uk-grid-margin="">
      

        <div class="uk-width-1-1 uk-width-medium-1-2">
          <div class="uk-panel uk-panel-box" style="min-height: 644px;">
            <h3 class="uk-h4 uk-module-title uk-margin-bottom ">LINK EKSTERNAL</h3>

            <ul class="uk-list ">
               <?php foreach($this->homemodel->link_ex()->result_array() as $link): ?>
             <li><a href="<?= $link['link'] ?>"><?= $link['judul'] ?> </a></li>
           <?php endforeach; ?>
            </ul>
          </div>
                </div>
                
                
        <div class="uk-width-1-1 uk-width-medium-1-2">
          <div class="uk-panel uk-panel-box" style="min-height: 644px;">


            <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 uk-grid-small" data-uk-grid-margin="">

              <div class="uk-panel uk-panel-space uk-row-first">
                <div data-uk-scrollspy="{cls:&#39;uk-animation-fade uk-text-center&#39;, delay:100}">
                  <img class="" src="<?= base_url()?>gaya/img/kd.png" alt="demo" width="120" height="75">
                </div>
              </div>

              <div class="uk-panel uk-panel-space">
                <div data-uk-scrollspy="{cls:&#39;uk-animation-fade uk-text-center&#39;, delay:150}">
                  <img class="" src="<?= base_url()?>gaya/img/unes.png" alt="demo" width="120" height="75">
                </div>
              </div>

             

            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <footer id="tm-footer" class="tm-footer uk-position-relative">
    <div class="uk-container uk-container-center">
      <div class="uk-flex uk-flex-middle uk-flex-space-between uk-text-center-small">

        <div class="tm-footer-left">
          <div class="uk-panel">

            <p>Copyright © Universitas ekasakti <a href="https://unespadang.ac.id/s" >padang</a></p>
          </div>
        </div>

        <div class="tm-footer-right">
          <div class="uk-panel">

            <div class="uk-text-right">
              <a href="#" class="uk-icon-button uk-icon-linkedin" target="_blank"></a>
              <a href="#" class="uk-icon-button uk-icon-vk" target="_blank"></a>
              <a href="#" class="uk-icon-button uk-icon-twitter" target="_blank"></a>
              <a href="#" class="uk-icon-button uk-icon-instagram" target="_blank"></a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </footer>


  <div id="modal-a" class="uk-modal">

    <div class="uk-modal-dialog uk-modal-dialog-lightbox  uk-modal-dialog-small">
      <a class="uk-modal-close uk-close uk-close-alt"></a>
      <div class="uk-panel-box">
        <h3 class="uk-panel-title ">Sign In</h3>
        <form class="uk-form" action="sssssssss.html/index.php" method="post">


          <div class="uk-form-row">
            <div class="uk-form-icon uk-width-1-1">
              <i class="uk-icon-grav-user2"></i>
              <input class="uk-width-1-1" type="text" name="username" size="18" placeholder="Username">
            </div>
          </div>

          <div class="uk-form-row">
            <div class="uk-form-password uk-form-icon uk-width-1-1">
              <i class="uk-icon-grav-key2"></i>
              <input class="uk-width-1-1" type="password" name="password" size="18" placeholder="Password">
              <a href="sssssssss.html/" class="uk-form-password-toggle" data-uk-form-password="{lblShow:&#39;&lt;i class=&quot;uk-icon-eye&quot;&gt;&lt;/i&gt;&#39;, lblHide:&#39;&lt;i class=&quot;uk-icon-eye-slash&quot;&gt;&lt;/i&gt;&#39;}"><i class="uk-icon-eye"></i></a>
            </div>
          </div>


          <div class="uk-form-row">
            <button class="uk-button uk-button-primary uk-width-1-1" value="Log in" name="Submit" type="submit">Log in</button>
          </div>

          <div class="uk-form-row uk-hidden">
            <label for="modlgn-remember-1664514904">Remember Me</label>
            <input id="modlgn-remember-1664514904" type="checkbox" name="remember" value="yes" checked="">
          </div>

          <ul class="uk-list uk-margin-bottom-remove">
            <li><a href="sssssssss.html/index.php/component/users/?view=reset&amp;Itemid=781">Forgot
                your password?</a></li>
            <li><a href="sssssssss.html/index.php/component/users/?view=remind&amp;Itemid=781">Forgot
                your username?</a></li>
          </ul>


          <input type="hidden" name="option" value="com_users">
          <input type="hidden" name="task" value="user.login">
          <input type="hidden" name="return" value="aHR0cHM6Ly9kZW1vLmFycm93dGhlbWVzLmNvbS9qb29tbGEvZ3Jhdml0eS8=">
          <input type="hidden" name="2812ea9e4db5509466921e61eb4ca392" value="1">
        </form>
      </div>
    </div>
  </div>



  <div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
      <div class="uk-panel">
        <form id="search-284" class="uk-search" action="" method="post">
          <input class="uk-search-field" type="text" name="searchword" placeholder="search...">
          <input type="hidden" name="task" value="search">
          <input type="hidden" name="option" value="com_search">
          <input type="hidden" name="Itemid" value="781">
        </form>
      </div>
      <nav class="navbar">
      <div class="uk-panel ">

      
       <?= main_menu('Bottom'); ?> 
        </div>
</nav>
   
  </div>
</div>


  <script>
    (function($) {
      $(document).on('ready', function() {
        var config = $("html").data("config") || {
          style: "default"
        };
        $('img[src*="demo/default"]').each(function() {
          var a = new Image,
            b = this.src.replace("demo/default", "demo/" + config.style),
            c = this;
          a.onload = function() {
            c.src = b
          }, a.src = b
        }), setTimeout(function() {
          $(".uk-cover-background").each(function() {
            var a = new Image,
              b = $(this).css("background-image").replace("demo/default", "demo/" + config.style),
              c = $(this);
            a.onload = function() {
              c.css("background-image", b)
            }, a.src = b.replace(/url\(\"?(.+?)\"?\)/i, "$1")
          })
        }, 20);
      });
    })(jQuery);
  </script>

</body>

</html>