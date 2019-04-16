jQuery(function($) {
    // MainContent move down
    $(window).on('load', function(){
        var headerHeight = $('header').outerHeight();

        $('.section__banner').css({
            'margin-top': headerHeight
        })
    });

    // Sticky Header
    $(window).on('scroll', function() {
        var winSc = $(this).scrollTop();

        if(winSc > 10) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }

        if(winSc > 100) {
            $('.register-btn').fadeIn();
        } else {
            $('.register-btn').fadeOut();
        }
    });

    // Urban section slider
    $('.urban__slider').slick({
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        prevArrow:"<button type='button' class='slick-prev pull-left'><span class='icon icon-arrowleft'></span></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><span class='icon icon-arrowright'></span></button>"
    });

    // Floor-Plan slider
    $('.floor__planSlider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
    });

    // Reset Slick
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        e.target
        e.relatedTarget
        $('.floor__planSlider').slick('setPosition');
    });

    // Scroll to Div
    $(".nav-link").click(function() {

        var scTo = $(this).attr('href');
        var header = $('header').outerHeight();

        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        $('html, body').animate({
            scrollTop: $(scTo).offset().top - header
        }, 2000);
    });  
    // Scroll to Div
    $(".register-btn a").click(function() {

        var scTo = $(this).attr('href');
        var header = $('header').outerHeight();

        $('html, body').animate({
            scrollTop: $(scTo).offset().top - header
        }, 2000);
    });
})