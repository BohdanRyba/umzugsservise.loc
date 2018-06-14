$(function () {
    // open_foto();
    remove_things();
    counter_add();
    // svg();
    // svg_green();
    clone_thing();
    open_add_things();
    create_list_things();
    specify_dimensions();
    item_settings();
    del_settings();
    add_foto_thing();
    close_foto_things();
    del_img();
    choice_paragraph();
    // open_file_down();
    // change_order();
});

// function change_order() {
//     $('.change_order').change(function () {
//         if ($(this).val() === '1') {
//             $(".exact-date").show();
//         }
//         if ($(this).val() === '2') {
//             $(".date-range").show();
//         }
//     });
// }

// function open_foto() {
//     $(".open_foto").on('click', (function () {
//         event.preventDefault();
//         $(".downloading-files .list .hover-downloading-foto").show();
//     }));
// }

// function open_file_down() {
//     $(".open_download_file").on('click', (function () {
//         event.preventDefault();
//         $(".hover-downloading-file").show();
//     }));
// }

function remove_things() {
    $(".delete-things").on('click', (function () {
        $(this).parents(".some-things").css('display', 'none');
    }));

}

function counter_add() {
    $('.down').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.up').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });

}
//
//
// function svg() {
//     $.fn.toSVG = function (options) {
//         var params = $.extend({
//             svgClass: "replaced-svg",
//             onComplete: function () {
//             },
//         }, options)
//         this.each(function () {
//             var $img = jQuery(this);
//             var imgID = $img.attr('id');
//             var imgClass = $img.attr('class');
//             var imgURL = $img.attr('src');
//             if (!(/\.(svg)$/i.test(imgURL))) {
//                 console.warn("image src='" + imgURL + "' is not a SVG, item remained tag <img/> ");
//                 return;
//             }
//             $.get(imgURL, function (data) {
//                 var $svg = jQuery(data).find('svg');
//                 if (typeof imgID !== 'undefined') {
//                     $svg = $svg.attr('id', imgID);
//                 }
//                 if (typeof imgClass !== 'undefined') {
//                     $svg = $svg.attr('class', imgClass + " " + params.svgClass);
//                 }
//                 $svg = $svg.removeAttr('xmlns:a');
//                 if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
//                     $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
//                 }
//                 $img.replaceWith($svg);
//                 typeof params.onComplete == "function" ? params.onComplete.call(this, $svg) : '';
//             })
//         });
//     };
// };
//
// function svg_green() {
//     $('.item img.svg').toSVG();
// }

function clone_thing() {
    $(".other-add").click(function (e) {
        e.preventDefault();
        var view = {
            name: "Joe",
            occupation: "Web Developer"
        };
        $("#templates").load("template.html #template1", function () {
            var template = document.getElementById('template1').innerHTML;
            var output = Mustache.render(template, view);
            $("#person").html(output);
        });


        $('.some-things').prepend('<div class="untitled"></div>');
        // $(".untitled").clone().appendTo('.some-things');
        // var tmpHtmlCode = $(".untitled").clone();
    });


}

function open_add_things() {
    $(".add_things_js").on('click', (function (event) {
        event.preventDefault();
        $(".other-things").show();
    }));
}

function create_list_things() {
    $(".create_list_js").on('click', (function (event) {
            event.preventDefault();
            $(".create-things").show();
            $(".downloading-files").hide();
            $(".js_things_info").hide();
            $(".choice-block-things").hide();
        })
    )
}

function specify_dimensions() {
    $(".parametr").on('click', (function (event) {
            event.preventDefault();
            $('.parametr').hide();
            $(".some-things .information-things .left-col .r-col .specify-dimensions").css('display', 'flex');
        })
    )
}

function item_settings() {
    $(".add-dim").on('click', function () {

        var l = $('input[name="l"]').val();
        var h = $('input[name="h"]').val();
        var v = $('input[name="v"]').val();
        var rez = l + 'x' + h + 'x' + v;
        $('.parametr_specify').text(rez);
        $('.specify-dimensions').hide();
        $('.parametr').show();
    })
}

function del_settings() {
    $(".del-dim").on('click', function () {
        $('.some-things .information-things .left-col .r-col .specify-dimensions').hide();
        $('.parametr').show();
    })
}

function add_foto_thing() {
    $(".add-foto .butt").on('click', function (event) {
        event.preventDefault();
        $(this).parents().siblings('.arhive-foto').show();
        $(this).parent().find('.close-foto-things').show();

    })

}

function close_foto_things() {
    $(".close-foto-things").on('click', function () {
        $('.arhive-foto').hide();
        $('.close-foto-things').hide();
    })
}

function del_img() {
    $(".del-img").on('click', function () {
        $(this).parent().hide();
    })
}

function choice_paragraph() {
    // $(".choice_paragraph").on('click', function (event) {
    //     event.preventDefault();
    //     if ($('.hover-downloading-foto').is(":visible")) {
    //         $('.full_photo_check').show();
    //         $('.choice-block-things').hide();
    //     }
    //     if ($('.create-things').is(":visible")) {
    //         $('.complete_checking_things').show();
    //         $('.create-things').hide();
    //     }
    //     if ($('.hover-downloading-file').is(":visible")) {
    //         $('.full_download_check').show();
    //         $('.choice-block-things').hide();
    //     }
    //
    //
    // })
    $(".btnChangeThings").on('click', function (event) {
        event.preventDefault();
        if ($('.complete_checking_things').is(":visible")) {
            $('.create-things').show();
            $('.complete_checking_things').hide();
        }
        else {

            $('.choice-block-things').show();
            $('.full_photo_check').hide();
            $('.full_download_check').hide();

        }
    })
}