
$(document).ready(function () {

    /* ========================================================================= */
	/*	Menu item highlighting
	/* ========================================================================= */

    jQuery('#nav').singlePageNav({
        offset: jQuery('#nav').outerHeight(),
        filter: ':not(.external)',
        speed: 1200,
        currentClass: 'current',
        easing: 'easeInOutExpo',
        updateHash: true,
        beforeStart: function () {
            console.log('begin scrolling');
        },
        onComplete: function () {
            console.log('done scrolling');
        }
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#navigation").css("background-color", "rgba(16, 22, 16,1)");
        } else {
            $("#navigation").css("background-color", "rgba(16, 22, 54, 0.2)");
        }
    });

    /* ========================================================================= */
	/*	Fix Slider Height
	/* ========================================================================= */

    var slideHeight = $(window).height();

    $('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height', slideHeight);

    $(window).resize(function () {
        'use strict',
        $('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height', slideHeight);
    });


   

});