<?php snippet('header') ?>
<div class="row">
	<h1 class="col-xs-"><?php echo $page->title() ?></h1>
	<a href="<?php echo $page->link() ?>">Watch Trailer</a>
</div>
<div class="row">
	<figure class="col-xs-12">
		<img src="<?php echo $background->url() ?>" alt="<?php echo $page->title() ?>">
	</figure>
	<?php foreach($company as $company): ?><img class="col-sm-4 col-xs-6" src="<?php echo $company->resize(400)->url() ?>" alt=""><?php endforeach ?>
</div>
<div class="row">
	<h2>Reviews</h2>
	<?php echo $page->reviews()->kt() ?>
</div>
<div class="row">
	<h2>Festivals &amp; Awards</h2>
	<?php foreach($festival as $festival): ?><img class="col-sm-4 col-xs-6" src="<?php echo $festival->resize(400)->url() ?>" alt=""><?php endforeach ?>
</div>
<div class="row">
	<section class="col-md-8">
		<h2>Synopsis</h2>
		<?php echo $page->synopsis()->kt() ?>
	</section>
	<section class="col-md-4">
		<h2>Credits</h2>
		<?php echo $page->credits()->kt() ?>
	</section>
</div>

<?php snippet('footer') ?>