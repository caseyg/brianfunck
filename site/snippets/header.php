<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/default.css') ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<section class="container">

  <header class="header row">
    <section class="col-lg-3 col-sm-4 col-xs-12">
      <h1><?php echo $site->title() ?></h1>
      <p><?php echo $site->description() ?></p>
    </section>
    <section class="col-lg-offset-1 col-lg-2 col-sm-4 col-xs-6">
      <h2>Work</h2>
      <?php snippet('menu') ?>
    </section>
    <section class="col-lg-2 col-sm-4 col-xs-6">
      <h2>About</h2>
      <ul class="menu list-unstyled">
        <li><a <?php e($pages->get('bio-press')->isOpen(), ' class="active"') ?> href="/bio-press">Bio + Press</a></li>   
        <li><a href="http://www.imdb.com/name/nm1363489/">IMDB Profile</a></li>   
        <li><a href="mailto:funckdren@gmail.com">Email</a></li>   
    </section>
  </header>