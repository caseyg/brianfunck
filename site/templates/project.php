<?php snippet('header') ?>
<div class="row">
	<h1 class="col-xs-12"><?php echo $page->title() ?></h1>
</div>
<?php if($background): ?>
<div class="row">
	<figure class="col-xs-12">
		<img src="<?php echo $background->url() ?>" alt="<?php echo $page->title() ?>">
	</figure>
</div>
<?php endif ?>
<?php if($page->link_trailer()->isNotEmpty() || $page->link_clip()->isNotEmpty() || $page->link_film()->isNotEmpty()): ?>
<div class="row">
	<div class="col-xs-12">
		<?php if(!$page->link_trailer()->empty()): ?><a class="btn btn-primary" href="<?php echo $page->link_trailer() ?>">Watch Trailer</a><?php endif ?>
		<?php if(!$page->link_clip()->empty()): ?><a class="btn btn-primary" href="<?php echo $page->link_clip() ?>">Watch Clip</a><?php endif ?>
		<?php if(!$page->link_film()->empty()): ?><a class="btn btn-primary" href="<?php echo $page->link_film() ?>">Watch Film</a><?php endif ?>
	</div>
</div>
<?php endif ?>
<?php if($page->reviews()->isNotEmpty()): ?>
<div class="row">
	<div class="col-xs-12">
		<hr>
		<h2>Reviews</h2>
		<?php echo $page->reviews()->kt() ?>
	</div>
</div>
<?php endif ?>
<?php if($festivals): ?>
<div class="row">
	<h2>Festivals &amp; Awards</h2>
	<div class="posters">
		<?php foreach($festival as $festival): ?>
			<figure class="col-sm-4 col-xs-6 poster"><img src="<?php echo $festival->resize(400)->url() ?>" alt=""></figure>
		<?php endforeach ?>
	</div>
</div>
<?php endif ?>
<?php if($page->synopsis()->isNotEmpty() || $page->credits()->isNotEmpty()): ?>
<div class="row">
	<div class="col-xs-12">
		<hr>
	</div>
	<?php if($page->synopsis()->isNotEmpty()): ?>
		<section class="col-md-8">
			<h2>Synopsis</h2>
			<?php echo $page->synopsis()->kt() ?>
		</section>
	<?php endif ?>
	<?php if($page->credits()->isNotEmpty()): ?>
		<section class="col-md-4">
			<h2>Credits</h2>
			<?php echo $page->credits()->kt() ?>
		</section>
	<?php endif ?>
</div>
<?php endif ?>
<?php if($company->count() > 0): ?>
<div class="row">
	<div class="col-xs-12">
		<hr>
		<h2>Companies</h2>
	</div>
	<?php foreach($company as $company): ?><img class="col-sm-2 col-xs-4" src="<?php echo $company->resize(400)->url() ?>" alt=""><?php endforeach ?>
</div>
<?php endif ?>
<?php snippet('footer') ?>
