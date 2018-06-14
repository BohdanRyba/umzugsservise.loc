function TabSteps() {
    this.steps = function () {
        $('.step-content>div:not(":first-of-type")').hide();
        $('.step-menu button').each(function (i) {
            $(this).attr('data-tab', 'tab' + i);
        });
        $('.step-content .content-choice').each(function (i) {
            $(this).attr('data-tab', 'tab' + i);
        });
        $('.step-menu button').on('click', function () {
            var dataTab = $(this).data('tab');
            var getWrapper = $(this).closest('.section-choice');
            getWrapper.find('.step-menu button').removeClass('active');
            $(this).addClass('active');
            getWrapper.find('.step-content>.content-choice').hide();
            getWrapper.find('.step-content>.content-choice[data-tab=' + dataTab + ']').show();
        });
            }
    this.steps();
}





function TabEngine1() {
    this.uiDesign = function () {
        $('.change_order').change(function () {
            if ($(this).val() === '2') {
                $(".exact-date").show();
                $(".date-range").hide();
            }
            if ($(this).val() === '3') {
                $(".date-range").show();
                $(".exact-date").hide();
            }
            if ($(this).val() === '1') {
                $(".date-range").hide();
                $(".exact-date").hide();
            }
        });
    };
    //
    // this.validate = function () {
    //          $("#form1").validate({
    //             rules: {
    //                 name: {
    //                     required: true,
    //                 },
    //                 city: {
    //                     required: true,
    //                 },
    //                 index: {
    //                     required: true,
    //                 },
    //                 surname: {
    //                     required: true,
    //                     minlength: 2
    //                 },
    //                 phone: "required",
    //                 theme: "required",
    //                 yourmail: {
    //                     required: true,
    //                     email: true
    //                 },
    //                 checkbox3:{validcb1:true},
    //                 msg: "required"
    //             },
    //             messages:{
    //                 name:{
    //                     required: "поле не заполнено или заполнено не верно",
    //                     minlength: "в поле должно быть минимум 2 символа",
    //                 },
    //                 city:{
    //                     required: "поле не заполнено или заполнено не верно",
    //                     minlength: "в поле должно быть минимум 2 символа",
    //                 },
    //                 index:{
    //                     required: "поле не заполнено или заполнено не верно",
    //                     minlength: "в поле должно быть минимум 2 символа",
    //                 },
    //                 msg: "поле не заполнено или заполнено не верно",
    //                 phone: "поле не заполнено или заполнено не верно",
    //                 theme: "поле не заполнено или заполнено не верно",
    //                 checkbox3: "отметьте один из флажков",
    //                 yourmail: "поле не заполнено или заполнено не верно"
    //             },
    //             // errorPlacement: function(error, element) {
    //             //     if (element.attr("name") == "yourname") error.insertAfter($("input[name=yourname]"));
    //             //     if (element.attr("name") == "msg") error.insertAfter($("textarea[name=msg]"));
    //             //     if (element.attr("name") == "phone") error.insertAfter($("input[name=phone]"));
    //             //     if (element.attr("name") == "theme") error.insertAfter($("input[name=theme]"));
    //             //     if (element.attr("name") == "checkbox3") error.insertAfter($("fieldset label:last"));
    //             //     if (element.attr("name") == "yourmail") error.insertAfter($("input[name=yourmail]"));
    //             // }
    //         });
    // }


    this.next = function () {
        // $('.step-content>div:not(":first-of-type")').hide();
        // $('.btnNext').click(function () {
        //     event.preventDefault();
/*вызов функции validate проверка true, false*/
            // ('.step-content>.content-choice[data-tab=' + dataTab + ']').show();
                //  var dataTab = $('.step-menu button').data('tab');
                //  var getWrapper = $('.step-menu button').closest('.section-choice');
                // getWrapper.find('.step-menu button').removeClass('active');
                //  $(this).addClass('active');
                // getWrapper.find('.step-content>.content-choice').hide();
                // getWrapper.find('.step-content>.content-choice[data-tab=' + dataTab + ']').show();




            // $('.nav-tabs button.active').next('button').trigger('click');
        // });
    };





    this.uiDesign();
    this.next();
    // this.validate();
}

function TabEngine2() {
    this.uiDesign = function () {
        $("input.add_service").on('change', (function () {
            $(".hover-service").toggle();
        }));
    };


    this.next = function () {
        $('.btnNext').click(function (event) {
            event.preventDefault();


            $('.nav-tabs  .active').next('button').trigger('click');
        });
    };


    this.prev = function () {
        $('.btnPrevious').click(function () {
            event.preventDefault();



            $('.nav-tabs .active').prev('button').trigger('click');
        });
    };


    this.uiDesign();
    // this.next();
    this.prev();

}


function TabEngine3() {
    this.svgImg = function () {
        $.fn.toSVG = function (options) {
            var params = $.extend({
                svgClass: "replaced-svg",
                onComplete: function () {
                },
            }, options)
            this.each(function () {
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');
                if (!(/\.(svg)$/i.test(imgURL))) {
                    console.warn("image src='" + imgURL + "' is not a SVG, item remained tag <img/> ");
                    return;
                }
                $.get(imgURL, function (data) {
                    var $svg = jQuery(data).find('svg');
                    if (typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }
                    if (typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass + " " + params.svgClass);
                    }
                    $svg = $svg.removeAttr('xmlns:a');
                    if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                    }
                    $img.replaceWith($svg);
                    typeof params.onComplete == "function" ? params.onComplete.call(this, $svg) : '';
                })
            });
        };
        $('.item img.svg').toSVG();
    };



    this.next = function () {
        $('.btnNext').click(function (event) {
            event.preventDefault();


            $('.nav-tabs  .active').next('button').trigger('click');
        });
    };


    this.prev = function () {
        $('.btnPrevious').click(function () {
            event.preventDefault();



            $('.nav-tabs .active').prev('button').trigger('click');
        });
    };


    // this.changeList= function () {
    // $(".btnChangeThings").on('click', function (event) {
    //     event.preventDefault();
    //     if ($('.complete_checking_things').is(":visible")) {
    //         $('.create-things').show();
    //         $('.complete_checking_things').hide();
    //     }
    //     else {
    //
    //         $('.choice-block-things').show();
    //         $('.full_photo_check').hide();
    //         $('.full_download_check').hide();
    //
    //     }
    // })










    this.svgImg();
        // this.changeList();
    this.prev();
    // this.next();
}