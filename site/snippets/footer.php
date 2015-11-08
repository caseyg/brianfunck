  <footer class="footer cf" role="contentinfo">

    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

    <div class="colophon">
      <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
    </div>

  </footer>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<script src="https://use.typekit.net/dfo4rgr.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script>

// init Masonry
$(document).ready(function () {
    var $container = $('.posters');

    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.poster',
            columnWidth: '.poster',
            transitionDuration: 0
        });
    });
});
</script>
</body>
</html>