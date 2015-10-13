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
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?php echo $site->url() ?><? endif ?>#focus"><?php echo $site->focus() ?></a></li>
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?php echo $site->url() ?><? endif ?>#projects"><?php echo $site->projects() ?></a></li>
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?php echo $site->url() ?><? endif ?>##erlin-remix"><?php echo $site->link2020() ?></a></li>
      <li><a class="scroller" href="<?php if(!$page->isHomepage()): ?><?php echo $site->url() ?><? endif ?>#contact"><?php echo $site->contact() ?></a></li>
    </ul>
  </div>
</nav>
