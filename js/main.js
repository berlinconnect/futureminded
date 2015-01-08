$(document).ready(function() {

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