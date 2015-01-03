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

<section class="services hidden center">
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

<section class="projects">
  <div class="description">
    <h2><?= $page->projectheadline() ?></h2>
    <?= $page->project()->kirbytext() ?>
    <ul class="projet-navigation">
      <?php foreach($pages->find('projects')->children()->visible()->flip() as $project): ?>
      <li>
        <a class="logo" style="background-image: url(<?php echo $project->images()->last()->url(); ?>)">
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="project-container">
    <?php foreach($pages->find('projects')->children() as $project): ?>
      <div id="<?= $project->indentifier() ?>" class="project active" style="background-image: url(<?php echo $project->images()->first()->url(); ?>)">
        <div class="overlay"></div>
        <div class="content">
          <h3 class="big"><?= $project->intro() ?></h3>
          <?= $project->text()->kirbytext() ?>
          <a class="button"><?= $page->more() ?></a>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</section>

<?php snippet('footer') ?>