$(document).ready(function() {

  var $root = $('html, body');
  $('a.scroller').click(function() {
      var href = $.attr(this, 'href');
      $root.animate({
          scrollTop: $(href).offset().top
      }, 500, function () {
          window.location.hash = href;
      });
      return false;
  });

  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   $('video').addClass('hidden');
  }

  $(".menu-button, .menu").click(function() {
    $('.menu, .menu-button').toggleClass('active');
  });

  $(".project-link:first, .project:first, .project-background:first").addClass('active');

  $(".project-link").click(function(ev) {

    var $target = $(this);
    var elementId = $target.attr('class').split(' ')[0];
    var currentProject = $target.attr('class').split(' ')[1];


    if (!$target.hasClass('project-link, project, project-background')) {
      $target = $target.closest('.project-link, .project, .project-background');
    }

    $(".project-link, .project, .project-background").removeClass('active');

    $(".project-link." + currentProject).addClass('active');
    $(".project." + currentProject).addClass('active');
    $(".project-background." + currentProject).addClass('active');


  });

});