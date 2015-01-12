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
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?= $site->url() ?><? endif ?>#focus"><?= $site->focus() ?></a></li>
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?= $site->url() ?><? endif ?>#projects"><?= $site->projects() ?></a></li>
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?= $site->url() ?><? endif ?>#2020plus"><?= $site->link2020() ?></a></li>
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?= $site->url() ?><? endif ?>#contact"><?= $site->contact() ?></a></li>
    </ul>
  </div>
</nav>
