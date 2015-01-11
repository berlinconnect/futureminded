<div class="hero">
  <div class="overlay dark">
    <div class="wrapper center">
      <h1><?= $page->tagline() ?></h1>
      <a class="scroller" href="#intro" class="learn-more button rounded"><?= $page->herobutton() ?></a>
    </div>
  </div>
  <div class="overlay gradient"></div>
  <video autoplay muted loop poster="img/bg.jpg" id="bgvid">
    <source src="assets/video/bg.webm" type="video/webm">
    <source src="assets/video/bg.mp4" type="video/mp4">
    <source src="assets/video/bg.ogg" type="video/ogg">
  </video>
</div>