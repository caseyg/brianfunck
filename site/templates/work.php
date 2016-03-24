<?php snippet('header') ?>

<div class="row">
  <div class="text lead">
    <?php echo $page->text()->kirbytext() ?>
  </div>
</div>
<section class="posters row">
	<?php foreach($page->children() as $page): ?>
		<div class="poster col-sm-4 col-xs-6">
		<a href="<?php echo $page->url() ?>">
			<img src="<?php echo $page->images()->first()->resize(400)->url() ?>" alt="<?php echo $page->title() ?>">
		</a>
		</div>
	<?php endforeach ?>
</section>

<?php snippet('footer') ?>