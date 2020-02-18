// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.2. END -----------------------------------------------------------------------------------------------------------

// A.2.1. TOGGLE DIV ----------------------------

function initPuzzle() {

  var currentContent = '';

  if (window.innerWidth < 768) {

    $('.a-puzzle-piece').on('click', function(){
      currentContent = $(this).attr('name');
      if($('#'+currentContent).hasClass('on')){
        $('#'+currentContent).removeClass('on');
      }else{
        hideAllContent();
        showCurrentContent(currentContent);
      }
    });

    function hideAllContent(){
      $('.a-puzzle-text').removeClass('on');
    };

    function showCurrentContent(currentContentDiv){
      $('#'+currentContentDiv).addClass('on');
    };

  }
}

// A.2.1. END -----------------------------------------
    
// A.2. END -----------------------------------------------------------------------------------------------------------

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
