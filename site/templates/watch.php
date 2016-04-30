<?php snippet('header') ?>
<div class="row">
	<div class="video col-xs-12">
		<iframe src="https://player.vimeo.com/video/<?php echo $page->children()->first()->vimeo() ?>?color=ffffff&portrait=0" width="1110" height="624" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		<hr>
	</div>
</div>
<div class="row">
	<div class="gallery gallery-nav js-flickity col-xs-12"
	  data-flickity-options='{"pageDots": false, "setGallerySize": true, "contain": true, "prevNextButtons": false, "imagesLoaded": true }'>
		<?php foreach($page->children() as $clip): ?>
			<div class="gallery-cell"><a href="<?php echo $clip->url() ?>"><img src="<?php echo thumb($clip->images()->first(), array('width' => 100))->url(); ?>" alt="<?php echo $clip->title()->html() ?>"></a></div>
		<?php endforeach ?>
	</div>
</div>

<?php snippet('footer') ?>
