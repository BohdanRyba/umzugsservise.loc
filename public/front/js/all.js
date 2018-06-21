$(function () {
    ui_calendar();
    popup_wind();
    mask();
    mask_qustion();
    AOS.init({
        offset: 200,
        disable: 'mobile'
    });
    type_input();
    change_input();
});


function type_input() {
    if ($(window).width() < 1025) {
        $(".datepicker_from").attr('type', 'date').prop('disabled', false);
        $(".datepicker_for").attr('type', 'date').prop('disabled', false);

    };
}

function change_input() {
    $('.datepicker_from').blur(function () {
        var val = this.value;
        if (val != '') {
            $('.input[type="date"]:before').css('content', '');
            $('input.datepicker_from').addClass('mobile_calendar')
        }
    })
    $('.datepicker_for').blur(function () {
        var val = this.value;
        if (val != '') {
            $('.input[type="date"]:before').css('content', '');
            $('input.datepicker_for').addClass('mobile_calendar')
        }
    })
}

function ui_calendar() {
    $(".datepicker_from").datepicker({
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
            'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
            'Октябрь', 'Ноябрь', 'Декабрь'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        firstDay: 1,
        monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
            'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        inline: true,
        showOtherMonths: true,
        yearRange: '2018:2040',
        changeMonth: true,
        weekHeader: 'Нед',
        changeYear: true,
        dateFormat: "dd.mm.yy",
        disableTouchKeyboard: true,
        ignoreReadonly: true
    })

    $(".datepicker_for").datepicker({
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
            'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
            'Октябрь', 'Ноябрь', 'Декабрь'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        firstDay: 1,
        monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
            'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        inline: true,
        showOtherMonths: true,
        yearRange: '2018:2040',
        changeMonth: true,
        weekHeader: 'Нед',
        changeYear: true,
        dateFormat: "dd.mm.yy",
        disable: 'mobile'
    });

    if ($(window).width() < 1024) {
        $('.datepicker_from').datepicker().datepicker('disable');
        $('.datepicker_for').datepicker().datepicker('disable');
    }
    ;


    // $("#datepicker_from").datepicker({
    // monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
    //     'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
    //     'Октябрь', 'Ноябрь', 'Декабрь'],
    // dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    // firstDay: 1,
    // monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
    //     'Июл','Авг','Сен','Окт','Ноя','Дек'],
    // yearRange: '2018:2040',
    // changeMonth: true,
    // weekHeader: 'Нед',
    // inline: true,
    // changeYear: true,
    // dateFormat: "dd.mm.yy"
    // });
    // $("#datepicker_for").datepicker({
    //     monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
    //         'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
    //         'Октябрь', 'Ноябрь', 'Декабрь'],
    //     dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    //     firstDay: 1,
    //     monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
    //         'Июл','Авг','Сен','Окт','Ноя','Дек'],
    //     yearRange: '2018:2040',
    //     changeMonth: true,
    //     weekHeader: 'Нед',
    //     changeYear: true,
    //     inline: true,
    //     dateFormat: "dd.mm.yy"
    // });
    // $("#datepicker_from_german").datepicker({
    //     monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
    //     dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
    //     dateFormat: "dd.mm.yy",
    //     monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
    //         'Jul','Aug','Sep','Okt','Nov','Dez'],
    //     yearRange: '2018:2040',
    //     changeMonth: true,
    //     changeYear: true
    //
    // });
    // $("#datepicker_for_german").datepicker({
    //     monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
    //     dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
    //     dateFormat: "dd.mm.yy",
    //     monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
    //         'Jul','Aug','Sep','Okt','Nov','Dez'],
    //     yearRange: '2018:2040',
    //     changeMonth: true,
    //     changeYear: true
    // });
    // $("#datepicker_from_en").datepicker({
    //     monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    //     dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    //     dateFormat: "dd.mm.yy",
    //     yearRange: '2018:2040',
    //     changeMonth: true,
    //     changeYear: true
    // });
    // $("#datepicker_for_en").datepicker({
    //     monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    //     dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    //     dateFormat: "dd.mm.yy",
    //     yearRange: '2018:2040',
    //     changeMonth: true,
    //     changeYear: true
    // });


}

function popup_wind() {
    $("a[href=#js-impressum]").fancybox();
    $("a[href=#js-datenschutz]").fancybox();
    $("a[href=#js-agb]").fancybox();
    $("a[href=#js-partner]").fancybox();
    $("a[href=#js-document]").fancybox();
    $("a[href=#answer]").fancybox();
    $("a[href=#js-qustion]").fancybox();
    $("a[href=#js-qustion-lk]").fancybox();
    $("a[href=#js_popup_slider_foto]").fancybox();

}

function mask() {
    /*----------------------------------------------------*/
    /*	Profile Phone mask https://habrahabr.ru/post/162537/
	/*----------------------------------------------------*/
    var maskList = $.masksSort($.masksLoad("/front/phone-codes.json"), ['#'], /[0-9]|#/, "mask");
    var maskOpts = {
        inputmask: {
            definitions: {
                '#': {
                    validator: "[0-9]",
                    cardinality: 1
                }
            },
            //clearIncomplete: true,
            showMaskOnHover: false,
            autoUnmask: true
        },
        match: /[0-9]/,
        replace: '#',
        list: maskList,
        listKey: "mask",
        onMaskChange: function (maskObj, completed) {
            if (completed) {
                var hint = maskObj.name_ru;
                if (maskObj.desc_ru && maskObj.desc_ru != "") {
                    hint += " (" + maskObj.desc_ru + ")";
                }
                // $("#descr").html(hint);
            } else {
                // $("#descr").html("Маска ввода");
            }
            // $(this).attr("placeholder", $(this).inputmask("getemptymask"));
        }
    };
    $('#phone_mask').change(function () {
        if ($('#phone_mask').is(':checked')) {
            $('#Piramida_phone').inputmasks(maskOpts);
        } else {
            $('#Piramida_phone').inputmask("+[####################]", maskOpts.inputmask)
                .attr("placeholder", $('#Piramida_phone').inputmask("getemptymask"));
            // $("#descr").html("Маска ввода");
        }
    });

    $('#phone_mask').change();
    /*END Phone mask*/

}

function mask_qustion() {
    /*----------------------------------------------------*/
    /*	Profile Phone mask https://habrahabr.ru/post/162537/
	/*----------------------------------------------------*/
    var maskList = $.masksSort($.masksLoad("/front/phone-codes.json"), ['#'], /[0-9]|#/, "mask");
    var maskOpts = {
        inputmask: {
            definitions: {
                '#': {
                    validator: "[0-9]",
                    cardinality: 1
                }
            },
            //clearIncomplete: true,
            showMaskOnHover: false,
            autoUnmask: true
        },
        match: /[0-9]/,
        replace: '#',
        list: maskList,
        listKey: "mask",
        onMaskChange: function (maskObj, completed) {
            if (completed) {
                var hint = maskObj.name_ru;
                if (maskObj.desc_ru && maskObj.desc_ru != "") {
                    hint += " (" + maskObj.desc_ru + ")";
                }
                // $("#descr").html(hint);
            } else {
                // $("#descr").html("Маска ввода");
            }
            // $(this).attr("placeholder", $(this).inputmask("getemptymask"));
        }
    };
    $('#phone_mask-qust').change(function () {
        if ($('#phone_mask-qust').is(':checked')) {
            $('#Piramida_phone-qust').inputmasks(maskOpts);
        } else {
            $('#Piramida_phone-qust').inputmask("+[####################]", maskOpts.inputmask)
                .attr("placeholder", $('#Piramida_phone-qust').inputmask("getemptymask"));
            // $("#descr").html("Маска ввода");
        }
    });


    $('#phone_mask-qust').change();
    /*END Phone mask*/

}

