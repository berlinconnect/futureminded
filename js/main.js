$(document).ready(function() {

  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 800);
          return false;
        }
      }
    });
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