<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('hero') ?>

<section class="intro center">
  <h3><?= $page->intro() ?></h3>
</section>
<div class="divider"></div>
<section class="about center">
  <h2><?= $page->aboutheadline() ?></h2>
  <?= $page->about()->kirbytext() ?>
<section>

<?php snippet('footer') ?>