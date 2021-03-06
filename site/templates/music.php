<?php snippet('header') ?>

<?php if(!$page->text()->empty()): ?>
<div class="row">
  <div class="text lead col-xs-12">
    <?php echo $page->text()->kirbytext() ?>
  </div>
</div>
<?php endif ?>
<section class="posters row">
  <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <div class="poster col-xs-6">
    <?php if (!$image->link()->empty()): ?><a href="<?php echo $image->link() ?>"><?php endif ?>
      <img src="<?php echo thumb($image, array('width' => 400))->url(); ?>" alt="<?php echo $page->title()->html() ?>">
    <?php if (!$image->link()->empty()): ?></a><?php endif ?>
    <p class="store-links">
      <?php if (!$image->itunes()->empty()): ?><a href="<?php echo $image->itunes() ?>"><i class="fa fa-lg fa-apple"></i> Apple Music</a> &nbsp;<?php endif ?>
      <?php if (!$image->spotify()->empty()): ?><a href="<?php echo $image->spotify() ?>"><i class="fa fa-lg fa-spotify"></i> Spotify</a> &nbsp;<?php endif ?>      
    </p>
    </div>
  <?php endforeach ?>
</section>
<?php if(!$page->reviews()->empty()): ?>
<div class="row">
  <div class="text col-xs-12">
    <h2>Reviews</h2>
    <?php echo $page->reviews()->kirbytext() ?>
  </div>
</div>
<?php endif ?>

<?php snippet('footer') ?>
