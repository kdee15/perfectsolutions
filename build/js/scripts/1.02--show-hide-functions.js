// 1. JAVASCRIPT LAYER [ 1.02 SHOW/HIDE FUNCTIONS ] ###################################################################
// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function initToggleFunctions() {

// A.3. END -----------------------------------------------------------------------------------------------------------

    // A.2.1. TOGGLE DIV ----------------------------

    var curContent = '';
    $('.tog-div').on('click', function(){
        curContent = $(this).attr('name');
        if($('#'+curContent).hasClass('on')){
            $('.'+curContent).removeClass('on');
            $('#'+curContent).removeClass('on');
        }else{
            hideCurContent();
            showCurContent(curContent);
        }
    });

    function hideCurContent(){
        $('.tog-content').removeClass('on');
        $('.tog-div').removeClass('on');
    };

    function showCurContent(curContentDiv){
        $('#'+curContentDiv).addClass('on');
        $('.'+curContentDiv).addClass('on');
    };

    // A.2.1. END -----------------------------------------

    // A.2.4. TOGGLE SWITCH & CONTENT ---------------------

    var togAllContent = '';

    $('.toggle-both').on('click', function (e) {

        e.preventDefault();
        togAllContent = $(this).attr('name');

        $('.' + togAllContent).toggleClass('on');
        $('#' + togAllContent).toggleClass('on');

    });

    // A.2.4. END -----------------------------------------

// A.3. END -----------------------------------------------------------------------------------------------------------

}

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 1. JAVASCRIPT LAYER [ 1.02 END ] ###################################################################################