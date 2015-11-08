<?php snippet('header') ?>

  <main>
    <div class="row">
      <div class="text lead col-lg-offset-4 col-lg-7">
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>
    <?php snippet('posters'); ?>
  </main>

<?php snippet('footer') ?>