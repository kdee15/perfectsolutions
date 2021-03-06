
// JS LAYER [1.8. TIMELINE FUNCTIONS]  ================================================================================

// A. FOOTER ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.1. TIMELINE ------------------------------------------------------------------------------------------------------

function initTimeline() {

  $('.o-timeline-item-wrapper:nth-child(odd) .m-timeline-record').addClass('reveal-fade-from-right');
  $('.o-timeline-item-wrapper:nth-child(even) .m-timeline-record').addClass('reveal-fade-from-left');

  $(document).ready( function() {

    if (window.innerWidth < 768) {
      $('.o-timeline-item-wrapper:nth-child(n+3)').addClass('hide');
    }

    if (window.innerWidth > 767) {
      $('.o-timeline-item-wrapper:nth-child(-n+3) .toggle-both').addClass('on');
      $('.o-timeline-item-wrapper:nth-child(-n+3) .toggle-content').addClass('on');
      $('.o-timeline-item-wrapper:nth-child(n+10)').addClass('hide');
    }

  });

  $(window).resize(function (e) {

    if (window.innerWidth < 768) {
      $('.o-timeline-item-wrapper:nth-child(n+3)').addClass('hide');
    }

  });

  $('.o-timeline-section .m-cta-wrapper.a-view-more .a-timeline-bullet').on('click touchstart', function () {
    $('.o-timeline-item-wrapper').removeClass('hide');
    $('.o-timeline-section .m-cta-wrapper').toggleClass('show');
  });

  $('.o-timeline-section .m-cta-wrapper.a-view-less .a-timeline-bullet').on('click touchstart', function () {
    $('.o-timeline-item-wrapper:nth-child(n+10)').addClass('hide');
    $('.o-timeline-section .m-cta-wrapper').toggleClass('show');
  });
  
}

// A.1. END -----------------------------------------------------------------------------------------------------------

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++