
<footer>
  <div class="wrapper">
    <div class="logo">
      <a href="/"><?php include("img/logo.svg"); ?></a>
    </div>
    <ul class="menu">
      <?php foreach($site->languages() as $language): ?>
        <li<?php e($site->language() == $language, ' class="active"') ?>>
          <a href="<?php echo $language->url() ?>">
            <?php echo html($language->name()) ?>
          </a>
        </li>
      <?php endforeach ?>
      <li><a href="imprint"><?= $site->imprint() ?></a></li>
      <li><a href="press"><?= $site->press() ?></a></li>
      <li><a href="https://twitter.com/future_minded" target="_blank"><img src="../img/twitter_logo.svg" class="twitterLogo"></a></li>
    </ul>
  </div>
</footer>

</body>
</html>