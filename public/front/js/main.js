$(function () {
    number();
    animate_text();
    partners_slider();
    reviews_slider();
    filter_models();
    language();
    AOS.init({
        offset: 200,
        disable: 'mobile'
    });

});

function language() {
    $('.language a').each(function (i) {

    });
}
function filter_models() {
    $('.tab-content>div:not(":first-of-type")').hide();
    $('.tab-content-descript>div:not(":first-of-type")').hide();
    $('.tab-menu button').each(function (i) {
        $(this).attr('data-tab', 'tab' + i);
    });
    $('.tab-content .content-choice').each(function (i) {
        $(this).attr('data-tab', 'tab' + i);
    });
    $('.tab-content-descript .content-choice').each(function (i) {
        $(this).attr('data-tab', 'tab' + i);
    });
    $('.tab-menu button').on('click', function () {
        var dataTab = $(this).data('tab');
        var getWrapper = $(this).closest('.section-choice');
        getWrapper.find('.tab-menu button').removeClass('active');
        $(this).addClass('active');
        getWrapper.find('.tab-content>.content-choice').hide();
        getWrapper.find('.tab-content>.content-choice[data-tab=' + dataTab + ']').show();
        getWrapper.find('.tab-content-descript>.content-choice').hide();
        getWrapper.find('.tab-content-descript>.content-choice[data-tab=' + dataTab + ']').show();
    });
}

function number() {

    var show = true;
    var countbox = ".benefits-inner";
    $(window).on("scroll load resize", function () {
        if (!show) return false;
        var w_top = $(window).scrollTop();
        var e_top = $(countbox).offset().top;
        var w_height = $(window).height();
        var d_height = $(document).height();
        var e_height = $(countbox).outerHeight();
        if (w_top + 800 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
            $('.benefits-number').css('opacity', '1');
            $('.benefits-number').spincrement({
                thousandSeparator: "",
                duration: 3000
            });

            show = false;
        }
    });

};

function animate_text() {
    $.fn.animate_Text = function () {
        var string = this.text();
        return this.each(function () {
            var $this = $(this);
            $this.html(string.replace(/./g, '<span class="new">$&</span>'));
            $this.find('span.new').each(function (i, el) {
                setTimeout(function () {
                    $(el).addClass('text_opacity').delay(4000)
                }, 100 * i);
            });
        });
    };
    $('.animate_text').show();
    $('.animate_text').animate_Text();
};

function partners_slider() {
    $(".slider-partners ").owlCarousel({
        slidesToShow: 1,
        slidesToScroll: 1,
        loop: true,
        marginleft: 10,
        marginright: 10,
        autoHeight: true,
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

function reviews_slider() {
    if ($(window).width() > 766) {
        $(".reviews-slider").owlCarousel({
            slidesToShow: 1,
            slidesToScroll: 1,
            loop: true,
            marginleft: 10,
            marginright: 10,
            nav: true,
            // autoHeight: true,
            item: 1,
            dots: true,
            navText: ["", ""],
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 3
                },
            }
        });
    }
    else {

            $(".reviews-slider").owlCarousel({
                slidesToShow: 1,
                slidesToScroll: 1,
                loop: true,
                marginleft: 10,
                marginright: 10,
                nav: true,
                autoHeight: true,
                item: 1,
                dots: true,
                navText: ["", ""],
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    991: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                }
            });

    }
}
