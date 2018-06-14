$(function () {
    tabs_partners ();
});

function tabs_partners () {
    $('.section-answers .tabs_answers .all .answer_title').click(function() {
        $('.section-answers .tabs_answers .all .answer_title h4').css('color', '#80849b');
        $('.section-answers .tabs_answers .all .arrow').css('display', 'block');
        $('.answer_info').css('display', 'none');
        $(this).parent().find('.arrow').css('display', 'none');
        $(this).parent().find('.answer_title h4').css('color', '#2f3233');
        $(this).parent().find('.answer_info').css('display', 'block');
    });
    $('.section-answers .tabs_answers .all .answer_info').click(function() {
        $('.answer_info').css('display', 'none');
        $(this).parent().find('.arrow').css('display', 'block');
        $('.section-answers .tabs_answers .all .answer_title h4').css('color', '#80849b');
    });
};
