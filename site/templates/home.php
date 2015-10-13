<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('hero') ?>

<section id="intro" class="intro center">
  <h3><?= $page->intro() ?></h3>
</section>

<div class="divider"></div>

<div class="wrapper">
  <section id="focus" class="about center">
    <h2><?= $page->aboutheadline() ?></h2>
    <?= $page->about()->kirbytext() ?>
  </section>
</div>

<section id="projects" class="projects">
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
      <li class="wasserbetriebe"></li>
      <li class="unionhilfswerk"></li>
    </ul>
  </div>
</section>

<section id="berlin-remix" class="twentyplus">
  <div class="header center">
    <div>
      <p style="font-size:44px;">Berlin Remix</p>
    </div>
    <h2 class="small" style="font-style: italic; color: #3FCBF3;"><?= $page->plusheadline() ?></h2>
    <div class="event-meta">
    </div>
    <?= $page->plus()->kirbytext() ?>
    <div class="wrapper">
      <h2 class="small"><?= $page->eventheadline() ?></h2>
      <div class="benefits cols">
        <div class="benefit col col-33">
          <img src="img/remix_give.svg" alt="challenges">
          <h2 style="font-size: 34px; "><?= $page->challengesheader() ?></h2>
          <p class="small" style="font-weight: bold;"><?= $page->challengessubheader() ?></p>
          <p class="small"><?= $page->challenges() ?></p>
          <p><a style="color: #3FCBF3;" href="http://bit.ly/1G6TDmJ"><?= $page->remixformlinktext() ?></a></p>
        </div>
        <div class="benefit col col-33">
          <img src="img/remix_partner.svg" alt="connect">
          <h2 style="font-size: 34px; "><?= $page->connectheader() ?></h2>
          <p class="small" style="font-weight: bold;"><?= $page->connectsubheader() ?></p>
          <p class="small"><?= $page->connect() ?></p>
          <p><a style="color: #3FCBF3;" href="mailto:linda@futureminded.de">linda@futureminded.de</a></p>
        </div>
        <div class="benefit col col-33">
          <img src="img/remix_develop.svg" alt="empower">
          <h2 style="font-size: 34px; "><?= $page->empowerheader() ?></h2>
          <p class="small" style="font-weight: bold;"><?= $page->empowersubheader() ?></p>
          <p class="small"><?= $page->empower() ?></p>
          <p><a style="color: #3FCBF3;" href="mailto:deborah@futureminded.de">deborah@futureminded.de</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact">
  <div class="wrapper">
    <div class="cols">
      <div class="col details col-50">
        <h2><?= $page->contactheadline() ?></h2>
        <?= $page->contact()->kirbytext() ?>
        <div class="address">
          <?= $page->address()->kirbytext() ?>
        </div>
        <div class="contactinfo">
          <?= $page->contactinfo()->kirbytext() ?>
        </div>
      </div>
        <div class="col form col-50" id="contact_form">
          <form autocomplete="off">
            <div id="contact_results"></div>
            <div id="contact_body">
              <div>
                <div class="icon name"></div>
                <input type="text" name="name" id="name" required="true" placeholder="<?= $page->namelabel() ?>" class="name"/>
              </div>

              <div>
                <div class="icon email"></div>
                <input type="email" name="email" required="true" placeholder="<?= $page->emaillabel() ?>" class="name"/>
              </div>

              <div>
                <div class="icon org"></div>
                <input type="text" name="org" required="true" placeholder="<?= $page->organizationlabel() ?>" class="name"/>
              </div>

              <div>
                <div class="icon message"></div>
                <textarea name="message" id="message" class="name" required="true" placeholder="<?= $page->messagelabel() ?>"></textarea>
              </div>
              <input type="button" class="button" id="submit_btn" value="Send"/>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

<?php snippet('footer') ?>
