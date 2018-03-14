<?php snippet('header') ?>
<div class="row">
	<figure class="col-md-4 bio-photo">
		<?php foreach($page->images() as $image): ?><img src="<?php echo thumb($image, array('width' => 400))->url(); ?>" alt=""><?php endforeach ?>
	</figure>
    <div class="text col-md-7">
		<?php echo $page->bio_short()->kt() ?>
    </div>
</div>
<?php snippet('footer') ?>
