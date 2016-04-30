<?php snippet('header') ?>
<div class="row">
	<figure class="col-md-4 bio-photo">
		<?php foreach($page->images() as $image): ?><img src="<?php echo thumb($image, array('width' => 400))->url(); ?>" alt=""><?php endforeach ?>
	</figure>
    <div class="text lead col-md-7">
      <?php echo $page->bio_short()->html() ?>
    </div>
</div>
<div class="row">
	<div class="col-md-offset-4 col-md-7">
		<?php echo $page->bio_long()->html() ?>
	</div>
</div>
<div class="row press">
	<div class="col-md-offset-4 col-md-7">
		<?php echo $page->press()->kirbytext() ?>
	</div>
</div>
<?php snippet('footer') ?>
