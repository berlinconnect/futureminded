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

<section id="twentyplus" class="twentytplus">
  <div class="header center">
    <div class="twentytplus-logo">
    </div>
    <h2 class="small"><?= $page->plusheadline() ?></h2>
    <div class="event-meta">
      <span class="date"><?= $page->eventdate() ?></span>
      <span class="location"><?= $page->eventlocation() ?></span>
    </div>
    <?= $page->plus()->kirbytext() ?>
    <div class="wrapper">
      <h2 class="small"><?= $page->eventheadline() ?></h2>
      <div class="benefits cols">
        <div class="benefit col col-33">
          <img src="img/understand.svg" alt="challenges">
          <p class="small"><?= $page->challenges() ?></p>
        </div>
        <div class="benefit col col-33">
          <img src="img/connect.svg" alt="connect">
          <p class="small"><?= $page->connect() ?></p>
        </div>
        <div class="benefit col col-33">
          <img src="img/empower.svg" alt="empower">
          <p class="small"><?= $page->empower() ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="content cols">
    <div class="speaker col col-60">
      <div class="copy">
        <h2><?= $page->speakerheadline() ?></h2>
        <?= $page->speaker()->kirbytext() ?>
      </div>
    </div>
    <div class="venue col col-40">
      <div class="copy">
        <h2><?= $page->venueheadline() ?></h2>
        <?= $page->venue()->kirbytext() ?>
        <a href="https://www.google.de/maps/place/Haus+Ungarn,+Karl-Liebknecht-Straße+9,+10178+Berlin/@52.5216631,13.4070552,17z/data=!3m1!4b1!4m2!3m1!1s0x47a851dffd417757:0xc73af00f815047f4" class="map">
          <div class="map-icon">
          </div>
          <span class="view-map"><?= $page->viewmap() ?></span>
        </a>
      </div>
    </div>
  </div>
  <a href="https://www.eventbrite.co.uk/e/2020plus-berlin-civic-business-leadership-event-2015-tickets-11455412447?ref=elink" class="button full-width">
    Register for the event
  </a>
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
      <div class="col form col-50">
        <form>
          <div>
            <div class="icon name"></div>
            <input class="name" placeholder="<?= $page->namelabel() ?>"/>
          </div>
          <div>
            <div class="icon email"></div>
            <input class="name" placeholder="<?= $page->emaillabel() ?>"/>
          </div>
          <div>
            <div class="icon org"></div>
            <input class="name" placeholder="<?= $page->organizationlabel() ?>"/>
          </div>
          <div>
            <div class="icon message"></div>
            <textarea class="name" placeholder="<?= $page->messagelabel() ?>"></textarea>
          </div>
          <input type="button" class="button" value="<?= $page->sendlabel() ?>"/>
        </form>
      </div>
    </div>
  </div>
</section>

<?php snippet('footer') ?>