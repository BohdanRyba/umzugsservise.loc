$(function () {
    tabs_qust ();
});

function tabs_qust () {
    $('.some-qustion .tabs_answers .all .answer_title').click(function() {
        $('.some-qustion .tabs_answers .all .answer_title h4').css('color', '#80849b');
        $('.some-qustion .tabs_answers .all .arrow').css('display', 'block');
        $('.answer_info').css('display', 'none');
        $(this).parent().find('.arrow').css('display', 'none');
        $(this).parent().find('.answer_title h4').css('color', '#2f3233');
        $(this).parent().find('.answer_info').css('display', 'block');
    });
    $('.some-qustion .tabs_answers .all .answer_info').click(function() {
        $('.answer_info').css('display', 'none');
        $(this).parent().find('.arrow').css('display', 'block');
        $('.some-qustion .tabs_answers .all .answer_title h4').css('color', '#80849b');
    });
};