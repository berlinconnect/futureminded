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
</section>

<section class="services center">
  <div class="wrapper">
    <div class="cols">
      <div class="col col-33">
        <img src="img/education.svg" alt="education">
        <h4><?= $page->educationheadline() ?></h4>
        <p class="small"><?= $page->education() ?></p>
      </div>
      <div class="col col-33">
        <img src="img/engagement.svg" alt="education">
        <h4><?= $page->engagementheadline() ?></h4>
        <p class="small"><?= $page->engagement() ?></p>
      </div>
      <div class="col col-33">
        <img src="img/business.svg" alt="education">
        <h4><?= $page->businessheadline() ?></h4>
        <p class="small"><?= $page->business() ?></p>
      </div>
    </div>
  </div>
</section>

<?php snippet('footer') ?>