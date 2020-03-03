// 1. JAVASCRIPT LAYER [ 1.02 SHOW/HIDE FUNCTIONS ] ###################################################################
// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function initCarouselFunctions() {

// A.1. CAROUSEL SCRIPTS ----------------------------------------------------------------------------------------------

  // A.1.1. DESTROY CAROUSEL ------------------------------

  // function owlInitialize() {
  //   if ($(window).width() < 768) {
  //     $('.classname').addClass("owl-carousel");
  //     $('.owl-carousel').owlCarousel({
  //       loop:true,
  //       margin: 0,
  //       nav: true,
  //       dots: true,
  //       items: 1,
  //     });
  //   }else{
  //     $('.owl-carousel').owlCarousel('destroy');
  //     $('.classname').removeClass("owl-carousel");
  //   }
  // }
  // $(document).ready(function(e) {
  //   owlInitialize();
  // });
  // $(window).resize(function() {
  //   owlInitialize();
  // });

  // A.1.1. END -----------------------------------------

  // A.1.2. TESTIMONIAL CAROUSEL ------------------------

  $('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items: 1
  })

  // A.2.2. END -----------------------------------------

  // A.1.2. TESTIMONIAL CAROUSEL ------------------------

  $('.service-carousel').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    nav: true,
    dots: true,
    loop:true,
    center: true,
    smartSpeed:450,
    responsive : {
      0 : {
        items : 1,
      },
      768 : {
        items:3,
      },
      1200 : {
        items:3,
      }
    }

  })

  // A.2.2. END -----------------------------------------

// A.3. END -----------------------------------------------------------------------------------------------------------

}

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 1. JAVASCRIPT LAYER [ 1.02 END ] ###################################################################################