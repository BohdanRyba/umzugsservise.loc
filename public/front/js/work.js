$(function () {
    slider_working();
    open_technologies();
    partners_slider();
    garant_animate();
    new WOW().init();

});

function   garant_animate() {
    $(document).ready(function(){
        $(document).scroll(function(e){
            var coord = $(".block-descript").offset();
            if ( ($(window).height()+$(window).scrollTop() >= coord.top) && ($(window).scrollTop() - (coord.top + 25) < 0) ){
            }
        });
    });
}

function slider_working() {
    $(".section-slider-working").owlCarousel({
        slidesToShow: 1,
        slidesToScroll: 1,
        loop: true,
        marginleft: 10,
        marginright: 10,
        autoHeight: true,
        nav: true,
        item: 1,
        smartSpeed:1000,
        dots: true,
        dotsData: true,
        navText: ["", ""],
        responsive: {
            0: {
                items: 1
            },
        }
    });
}
function open_technologies() {
    if ($(window).width() >1025) {
        $('.section-different-technologies .list-technologies .all-block').hover(function () {
            $(this).parent().addClass('list-technologies-hover');

        }, function () {
            $('.section-different-technologies .list-technologies').removeClass('list-technologies-hover');
        });
    }

    if ($(window).width() > 766 && $(window).width() < 1025) {
        $('.section-different-technologies .list-technologies .all-block').on('click', function () {
            $('.section-different-technologies .list-technologies').removeClass('active_technologies');
            $('.section-different-technologies .list-technologies .info-techn').css('display', 'none');
            $('.section-different-technologies .list-technologies .all-block').addClass('icon_arrow');
            $(this).parent().find('.info-techn').css('display', 'block', 'z-index', '111111');
            $(this).parent().addClass('active_technologies');
            $(this).removeClass('icon_arrow');
            $('.section-different-technologies .list-technologies .all-block:after').css('backgroundImage', 'inherit');

        });
        $('.list-technologies .check_tech').on('click', function () {
            $('.info-techn').css('display', 'none');
            $('.section-different-technologies .list-technologies .all-block:after').css('opacity', '1');
            $('.section-different-technologies .list-technologies .all-block').addClass('icon_arrow');
            $('.section-different-technologies .list-technologies').removeClass('active_technologies');
        });
    }
    if ($(window).width() < 766) {
        $('.section-different-technologies .list-technologies .all-block').on('click', function () {
            $('.section-different-technologies .list-technologies .info-techn').hide();
            $('.section-different-technologies .list-technologies .all-block').addClass('icon_arrow');
            $(this).parent().find('.info-techn').css('display', 'block', 'z-index', '111111');
            $(this).removeClass('icon_arrow');
            $('.section-different-technologies .list-technologies .all-block:after').css('backgroundImage', 'inherit');

        });
        $('.list-technologies .check_tech').on('click', function () {
            $('.info-techn').css('display', 'none');
            $('.section-different-technologies .list-technologies .all-block:after').css('opacity', '1');
            $('.section-different-technologies .list-technologies .all-block').addClass('icon_arrow');
        });
    }
}

function partners_slider() {
    $(".slider-partners ").owlCarousel({
        slidesToShow: 1,
        slidesToScroll: 1,
        loop: true,
        marginleft: 10,
        marginright: 10,
        nav: true,
        item: 1,
        dots: true,
        navText: ["", ""],
        responsive: {
            0: {
                items: 1
            },
            481: {
                items: 2
            },
            767: {
                items: 4
            },
            991: {
                items: 4
            },
            1200: {
                items: 5
            },
        }
    });
}



