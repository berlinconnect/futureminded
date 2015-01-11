<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="wrapper press">
  <h1><?= $page->title() ?></h1>
  <?php foreach($page->children()->visible()->flip() as $post):?>
  <article>
  <h2><a href="<?php echo $post->url() ?>"><?= $post->title() ?></a></h2>
  <div class="meta">
    <span><?= $post->date('M d Y') ?></span><span><?= $post->author() ?></span>
  </div>
  <?= $post->text()->kirbytext()->excerpt(200) ?>
  <a class="post-link" href="<?php echo $post->url() ?>">Continue reading...</a>
  </article>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>