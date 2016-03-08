<?php snippet('header') ?>

<div class="row">
  <div class="text lead col-lg-offset-4 col-lg-7">
    <?php echo $page->text()->kirbytext() ?>
  </div>
</div>
<section class="posters row">
  <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <div class="poster col-lg-4 col-md-4 col-sm-6 col-xs-6">
    <?php if (!$image->link()->empty()): ?><a href="<?php echo $image->link() ?>"><?php endif ?>
      <img src="<?php echo thumb($image, array('width' => 400))->url(); ?>" alt="<?php echo $page->title()->html() ?>">
    <?php if (!$image->link()->empty()): ?></a><?php endif ?>
    <?php if (!$image->itunes()->empty()): ?></p><a href="<?php echo $image->itunes() ?>"><i class="fa fa-lg fa-apple"></i> Apple Music</a><?php endif ?>
      <?php if (!$image->spotify()->empty()): ?><a href="<?php echo $image->spotify() ?>"><i class="fa fa-lg fa-spotify"></i> Spotify</a><?php endif ?>
    </div>
  <?php endforeach ?>
</section>

<?php snippet('footer') ?>