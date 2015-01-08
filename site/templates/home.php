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
  <div class="project-wrapper">
    <div class="container">
      <div class="description">
        <h2><?= $page->projectheadline() ?></h2>
        <?= $page->project()->kirbytext() ?>
        <ul class="projet-navigation">
          <?php foreach($pages->find('projects')->children() as $project): ?>
          <li>
            <a class="project-link <?= $project->identifier() ?>">
              <?= $project->name() ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="project-container">
        <?php foreach($pages->find('projects')->children() as $project): ?>
          <div class="project <?= $project->identifier() ?>">
            <div class="content">
              <h3 class="big"><?= $project->intro() ?></h3>
              <?= $project->text()->kirbytext() ?>
              <a href="<?= $project->button() ?>" class="button"><?= $page->more() ?></a>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="overlay"></div>
  <?php foreach($pages->find('projects')->children() as $project): ?>
    <div class="project-background <?= $project->identifier() ?>" style="background-image: url(<?php echo $project->images()->first()->url(); ?>)">
    </div>
  <?php endforeach ?>

</section>

<section class="partnerships center">
  <div class="wrapper">
    <h2><?= $page->partnershipsheadline() ?></h2>
    <?= $page->partnerships()->kirbytext() ?>
    <ul class="center">
      <li class="a21"></li>
      <li class="charity"></li>
      <li class="booking"></li>
      <li class="mandalah"></li>
      <li class="soundcloud"></li>
      <li class="bundestag"></li>
    </ul>
  </div>
</section>

<?php snippet('footer') ?>