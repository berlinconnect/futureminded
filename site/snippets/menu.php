<nav class="navigation" role="navigation">
  <div class="wrapper">
    <div class="logo">
      <a href="/"><?php include("img/logo.svg"); ?></a>
    </div>
    <div class="menu-button">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul class="menu">
      <li><a href="#focus"><?= $site->focus() ?></a></li>
      <li><a href="#projects"><?= $site->projects() ?></a></li>
      <li><a href="#twentyplus"><?= $site->link2020() ?></a></li>
      <li><a href="#contact"><?= $site->contact() ?></a></li>
    </ul>
  </div>
</nav>
