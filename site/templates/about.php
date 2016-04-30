<?php snippet('header') ?>
<div class="row">
	<figure class="col-md-4 bio-photo">
		<?php foreach($page->images() as $image): ?><img src="<?php echo thumb($image, array('width' => 400))->url(); ?>" alt=""><?php endforeach ?>
	</figure>
    <div class="text col-md-7">
		<h2>The Shorter Version</h2>
		<?php echo $page->bio_short()->kt() ?>
    </div>
</div>
<div class="row">
	<div class="col-md-offset-4 col-md-7">
		<hr>
		<h2>The Longer Version</h2>
		<?php echo $page->bio_long()->kt() ?>
	</div>
</div>
<?php snippet('footer') ?>
