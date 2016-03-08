<?php snippet('header') ?>
<div class="row">
	<div class="gallery gallery-main js-flickity" data-flickity-options='{"pageDots": false, "setGallerySize": true, "prevNextButtons": false }'>
		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
			<div class="gallery-cell video col-xs-12">
				<iframe src="https://player.vimeo.com/video/<?php echo $image->vimeo() ?>?color=ffffff&portrait=0" width="1110" height="624" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<p><?php echo $image->title(); ?> <?php if (!$image->length()->empty()): ?>(<?php echo $image->length(); ?>)<?php endif ?></p>
				</div>
		<?php endforeach ?>
	</div>
</div>
<div class="row">
	<div class="gallery gallery-nav js-flickity col-xs-12"
	  data-flickity-options='{ "asNavFor": ".gallery-main", "pageDots": false, "setGallerySize": true, "contain": true, "prevNextButtons": false, "imagesLoaded": true }'>
		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
			<div class="gallery-cell"><img src="<?php echo thumb($image, array('width' => 100))->url(); ?>" alt="<?php echo $page->title()->html() ?>"></div>
		<?php endforeach ?>
	</div>
</div>

<?php snippet('footer') ?>