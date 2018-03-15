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
	<div class="col-sm-6 col-xs-12 watch-buttons">
		<?php if(!$page->link_trailer()->empty()): ?><a class="btn btn-primary" href="<?php echo $page->link_trailer() ?>" target="_blank">Watch Trailer</a><?php endif ?>
		<?php if(!$page->link_clip()->empty()): ?><a class="btn btn-primary" href="<?php echo $page->link_clip() ?>" target="_blank">Watch Clip</a><?php endif ?>
		<?php if(!$page->link_film()->empty()): ?><a class="btn btn-primary" href="<?php echo $page->link_film() ?>" target="_blank">Watch Film</a><?php endif ?>
	</div>
	<?php if($company): ?>
		<figure class="col-sm-6 col-xs-12 company">		<hr class="visible-xs">
			<img src="<?php echo $company->resize(400,90)->url() ?>" width="<?php echo $company->resize(200,45)->width() ?>" height="<?php echo $company->resize(200,45)->height() ?>">
		</figure>
	<?php endif ?>
</div>
<?php endif ?>
<?php if($page->reviews()->isNotEmpty()): ?>
<div class="row">
	<div class="col-xs-12">
		<hr>
		<?php echo $page->reviews()->kt() ?>
	</div>
</div>
<?php endif ?>
<?php if($festival): ?>
<div class="row">
	<div class="col-xs-12">
		<hr>
		<figure><img src="<?php echo $festival->resize(848,82)->url() ?>" alt=""></figure>
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
<?php snippet('footer') ?>
