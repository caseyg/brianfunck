    </div>  <!-- .content -->
  </div> <!-- .row -->
</section> <!-- .container -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.pkgd.min.js"></script>
<script src="https://use.typekit.net/dfo4rgr.js"></script>
<script>

// init Masonry
$(document).ready(function () {
    $(".video").fitVids();

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