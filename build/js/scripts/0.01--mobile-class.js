// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. MOBILE CLASS
// ==
// ====== INDEX  ======================================================================================================

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
// A.1. MOBILE CLASS --------------------------------------------------------------------------------------------------

var deviceAgent = navigator.userAgent.toLowerCase();

$('html').addClass('desktop');

if (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
  $('html').addClass('safari');
}

if (deviceAgent.match(/(msie)/)) {
  $('html').addClass('ie');
}

if (deviceAgent.match(/(chrome)/)) {
  $('html').addClass('chrome');
}

if (deviceAgent.match(/(firefox)/)) {
  $('html').addClass('firefox');
}

if (deviceAgent.match(/(opera)/)) {
  $('html').addClass('opera');
}

if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
  $('html').removeClass('desktop');
  $('html').addClass('ios');
  $('html').addClass('mobile');
}

if (deviceAgent.match(/android/)) {
  $('html').removeClass('desktop');
  $('html').addClass('android');
  $('html').addClass('mobile');
}

if (deviceAgent.match(/blackberry/)) {
  $('html').removeClass('desktop');
  $('html').addClass('blackberry');
  $('html').addClass('mobile');
}

if (deviceAgent.match(/(symbianos|^sonyericsson|^nokia|^samsung|^lg)/)) {
  $('html').removeClass('desktop');
  $('html').addClass('mobile');
}

function detectIE() {
  var ua = window.navigator.userAgent;
  var msie = ua.indexOf('MSIE ');
  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
  }

  var trident = ua.indexOf('Trident/');
  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf('rv:');
    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  var edge = ua.indexOf('Edge/');
  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
  }

  // other browser
  return false;
}

// A.1. END -----------------------------------------------------------------------------------------------------------
  
// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++