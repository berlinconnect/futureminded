<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="wrapper press article">
  <article>
  <h1><?= $page->title() ?></h1>
  <div class="meta center">
    <span><?= $page->date('M d Y') ?></span><span><?= $page->author() ?></span>
  </div>
  <?= $page->text()->kirbytext() ?>
  </article>
</div>

<?php snippet('footer') ?>