// 1. JAVASCRIPT LAYER [ 1.02 SHOW/HIDE FUNCTIONS ] ###################################################################
// A. EQUAL HEIGHTS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function initEqualheightsFunctions() {

  equalheight('.classname');

  if($(window).width() > 767) {

    equalheight('.o-values-card .m-card-body .a-title');
    equalheight('.o-values-card .m-card-body .a-copy');

  }

}

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 1. JAVASCRIPT LAYER [ 1.02 END ] ###################################################################################