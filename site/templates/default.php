<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="wrapper page">
  <h1><?= $page->title() ?></h1>
  <?= $page->text()->kirbytext() ?>
</div>

<?php snippet('footer') ?>