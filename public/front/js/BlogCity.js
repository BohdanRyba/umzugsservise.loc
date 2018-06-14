$(function () {
    filter_blog();
    share();
});



function filter_blog() {
    $('.tab-content>div:not(":first-of-type")').hide();
    $('.tab-menu button').each(function (i) {
        $(this).attr('data-tab', 'tab' + i);
    });
    $('.tab-content .content-choice').each(function (i) {
        $(this).attr('data-tab', 'tab' + i);
    });
    $('.tab-menu button').on('click', function () {
        var dataTab = $(this).data('tab');
        var getWrapper = $(this).closest('.section-choice');
        getWrapper.find('.tab-menu button').removeClass('active');
        $(this).addClass('active');
        getWrapper.find('.tab-content>.content-choice').hide();
        getWrapper.find('.tab-content>.content-choice[data-tab=' + dataTab + ']').show();
    });
}

function share() {

        if (window.pluso)if (typeof window.pluso.start == "function") return;
        if (window.ifpluso==undefined) { window.ifpluso = 1;
            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
            var h=d[g]('body')[0];
            h.appendChild(s);
        }
}

