// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.2. END -----------------------------------------------------------------------------------------------------------

// A.2.1. TOGGLE DIV ----------------------------

var burgerContent = '';
$('.o-hamburger').on('click', function(){
  burgerContent = $(this).attr('name');
  if($('#'+burgerContent).hasClass('on')){
    $('#'+burgerContent).removeClass('on');
    $('.'+burgerContent).removeClass('on');
    $('.o-navigation').removeClass('on');
  }else{
    hideBurgerContent();
    showBurgerContent(burgerContent);
  }
});

function hideBurgerContent(){
  $('.o-burger-nav').removeClass('on');
  $('.o-hamburger').removeClass('on');
  $('.o-navigation').removeClass('on');
};

function showBurgerContent(burgerContentDiv){
  $('#'+burgerContentDiv).addClass('on');
  $('.'+burgerContentDiv).addClass('on');
  $('.o-navigation').addClass('on');
};

$('.a-scroll-link').on('click', function(){
  $('.o-navigation').removeClass('on');
  $('.burger-nav').removeClass('on');
  $('#burger-nav').removeClass('on');
});

// A.2.1. END -----------------------------------------
    
// A.2. END -----------------------------------------------------------------------------------------------------------

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
