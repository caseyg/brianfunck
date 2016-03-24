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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css">
</head>
<body>
<section class="container">
  <div class="row">
    <nav class="col-xs-12 col-md-3 lead">
      <div class="row">
        <h1 class="lead"><a <?php e($pages->get('home')->isOpen(), ' class="active"') ?> href="/"><?php echo $site->title() ?></a></h1>
        <ul class="menu list-unstyled">
          <?php foreach($pages->visible() as $p): ?>
          <li>
            <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
          <?php endforeach ?>
          <li><a href="mailto:funckdren@gmail.com">Email</a></li>   
        </ul>
      </div>
    </nav>
    <div class="content col-xs-12 col-md-9">