// 1. JAVASCRIPT LAYER [ 1.00 WINDOW READY START ] ####################################################################

$(window).on('load', function() {

  // PRELOADER --------------------------------------------

  $('html').removeClass('preloader');
  $('html').addClass('kd-app');

  // LOAD FUNCTIONS ---------------------------------------

  initToggleFunctions();
  initCarouselFunctions();
  initEqualheightsFunctions();
  initTimeline();
  initScrollIntoView();
