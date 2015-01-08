<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script src="//use.typekit.net/ajy4pec.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <?php echo css('css/styles.css') ?>

  <?php echo js('js/libs/jquery.js') ?>
  <?php echo js('js/libs/modernizr.js') ?>
  <?php echo js('js/main.js') ?>

</head>
<body>
