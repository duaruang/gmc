   
    AOS.init();
    
    function sticky() {

        var header = $('#header');
        var top = $('.top-header');

        if(window.pageYOffset > 0) {
            header.addClass('sticky');
            top.fadeOut(500);
        } else {
            header.removeClass('sticky');
            top.fadeIn(500);
        }
    }
    
    $( window ).scroll(function() {
        sticky();
    });