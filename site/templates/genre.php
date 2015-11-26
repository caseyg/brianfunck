<?php snippet('header') ?>

  <main>
    <div class="row">
      <div class="text lead col-lg-offset-4 col-lg-7">
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>
    <?php if($page->featured()->isTrue()): ?>
	    <?php snippet('posters-featured'); ?>
	<?php else: ?>
	    <?php snippet('posters'); ?>
	<?php endif ?>
  </main>

<?php snippet('footer') ?>