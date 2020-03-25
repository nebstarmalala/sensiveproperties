/*  ---------------------------------------------------
    Theme Name: Azenta
    Description:
    Author:
    Author URI:
    Version: 1.0
    Created:
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
    Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    $(".canvas-open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").addClass("active");
    });


    $(".canvas-close, .offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*------------------
		Navigation
	--------------------*/
    // $(".mobile-menu").slicknav({
    //     prependTo: '#mobile-menu-wrap',
    //     allowParentLinks: true
    // });

    /*------------------
		Menu Hover
	--------------------*/
    // $(".header-section .top-nav .main-menu ul li").on('mousehover', function () {
    //     $(this).addClass('active');
    // });
    // $(".header-section .top-nav .main-menu ul li").on('mouseleave', function () {
    //     $('.header-section .top-nav .main-menu ul li').removeClass('active');
    // });

    /*------------------
        Carousel Slider
    --------------------*/
    var hero_s = $(".hero-items");
    var thumbnailSlider = $(".thumbs");
    var duration = 500;
    var syncedSecondary = true;

    setTimeout(function () {
        $(".cloned .item-slider-model a").attr("data-fancybox", "group-2");
    }, 500);
    /*------------------
        Magnific Popup
    --------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /*------------------
        Nice Select
    --------------------*/
    $('select').niceSelect();

    /*-------------------
		Range Slider
    --------------------- */
    //price 1
    $("#price-range").slider({
        range: true,
        min: 0,
        max: 1600000,
        values: [0, 1000000],
        slide: function (event, ui) {
            $("#priceRange").val("[" + ui.values[0] + "-" + ui.values[1] + "]" + "$");
        }
    });
    $("#priceRange").val("[" + $("#price-range").slider("values", 0) + "-" + $("#price-range").slider("values", 1) + "]" + "$");

    //price 2
    $("#price-range-P").slider({
        range: true,
        min: 0,
        max: 1600000,
        step: 50,
        values: [50, 1000000],
        slide: function (event, ui) {
            $("#priceRangeP").val("[ " + "$" + ui.values[0] + " - " + "$" + ui.values[1] + " ]");
        }
    });
    $("#priceRangeP").val("[ " + "$" + $("#price-range-P").slider("values", 0) + " - " + "$" + $("#price-range-P").slider("values", 1) + " ]");

    //room size 1
    $("#roomsize-range").slider({
        range: true,
        min: 0,
        max: 4500,
        step: 500,
        values: [500, 3000],
        slide: function (event, ui) {
            $("#roomsizeRange").val("[" + ui.values[0] + "-" + ui.values[1] + "]" + "sqft");
        }
    });
    $("#roomsizeRange").val("[" + $("#roomsize-range").slider("values", 0) + "-" + $("#roomsize-range").slider("values", 1) + "]" + "sqft");

    //room size 2
    $("#roomsize-range-P").slider({
        range: true,
        min: 0,
        max: 1400,
        step: 200,
        values: [200, 999],
        slide: function (event, ui) {
            $("#roomsizeRangeP").val("[ " + ui.values[0] + " Fqft" + " - " + ui.values[1] + " Fqft" + " ]");
        }
    });
    $("#roomsizeRangeP").val("[ " + $("#roomsize-range-P").slider("values", 0) + " Fqft" + " - " + $("#roomsize-range-P").slider("values", 1) + " Fqft" + " ]");

    /*------------------
		Single Product
	--------------------*/
    $('.product-thumbs-track .pt').on('click', function () {
        $('.product-thumbs-track .pt').removeClass('active');
        $(this).addClass('active');
        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.product-big-img').attr('src');
        if (imgurl != bigImg) {
            $('.product-big-img').attr({
                src: imgurl
            });
        }
    });

})(jQuery);