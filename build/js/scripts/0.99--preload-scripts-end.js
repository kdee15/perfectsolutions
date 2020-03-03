
// 0.2 LOAD FUNCTIONS -------------------------------------

initDeviceCheck();
initHeaderHeight();

// 0.2. END -----------------------------------------------

// 0.3. HEADER HEIGHT -------------------------------------

function initHeaderHeight() {

  var headerHeight = $( '.o-home-header' ).height();
  console.log(headerHeight);

  $('.toggle-content.a-burger-menu.horizontal').css('top', headerHeight );

}

// 0.3. END -----------------------------------------------

// 0. JAVASCRIPT LAYER [ 0.00 PRELOAD SCRIPTS END ] ###################################################################