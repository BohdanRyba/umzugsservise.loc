function ThirdTabEngine() {
    this.currentActiveTab = false;

    (function () {
        $(".list-things-bt button").on("click", function () {
            CallThirdTab.currentActiveTab = $(this).attr("id");
        });
    })();


    this.fileControl = function () {
        $(".open_foto").on('click', (function () {
            event.preventDefault();
            $(".downloading-files .list .hover-downloading-foto").show();
            $(".hover-downloading-file").hide();
        }));
    };

    this.uploadPhoto = function () {
        $('.foto-block .add-plus').click(function (e) {
            $('.hover-downloading-foto .foto-block').append('<div class="img-grup">\n' +
                '                               <div class="img-wrapp">\n' +
                '                                   <input type="file" style="display: none;" id="load_gallery" name="gallery[]" accept="image/jpeg,image/png,image/jpg">' +
                '                                   <span><span class="clouse-bg"></span></span>\n' +
                '                                   <img src="">\n' +
                '                               <div class="del-img">\n' +
                '                               </div>\n' +
                '                               </div>\n' +
                '                           </div>');
            $('.hover-downloading-foto .foto-block .img-grup:last-child input').click();
            binds();
            return false;
        });

        document.body.onfocus = function () {
            var $inps = $('.hover-downloading-foto .foto-block .img-grup input');
            $inps.each(function () {
                var $this = $(this);
                setTimeout(function () {
                    if ($this[0].files.length == 0) {
                        $this.parents('.img-grup').remove();
                    }
                }, 1000);
            });
            $('.load_gallery .warning').remove();
        };

        var binds = function () {
            var $inps = $('.hover-downloading-foto .foto-block .img-grup input');
            var $close = $('.del-img');
            $close.unbind('click');
            $inps.unbind('change');

            $inps.change(function () {
                var $input = $(this);
                var reader = new FileReader();
                reader.onload = function (e) {
                    $input.parent().find('img').attr('src', e.target.result);
                };
                reader.readAsDataURL($input[0].files[0]);
            });
            $close.click(function () {
                $(this).parents('.img-grup').remove();
            })
        }
    }

    this.uploadFile = function () {

        $(".file-upload input[type=file]").change(function () {
            $(".hover-downloading-file").show();
            $(".downloading-files .list .hover-downloading-foto").hide();
            var filename = $(this).val().replace(/.*\\/, "");
            $("#filename").val(filename);
            $('.file-upload input[type=file]').attr('disabled', true);
            del();
            return false;
        });
        var del = function () {
            var $close = $('.del-file');
            $close.click(function () {

                $('.hover-downloading-file').hide();
                $('.file-upload input[type=file]').removeAttr('disabled');
            })
        }
    }


    this.showResult = function () {

        $(".choice_paragraph").on('click', function (event) {
            event.preventDefault();
            showTab1();
            showTab2();
            showTab3();

        });
        var showTab1 = function () {

            if ($('.create-things').is(":visible")) {
                $('.complete_checking_things').show();
                $('.create-things').hide();
            }
        }
        var showTab2 = function () {

            if ($('.hover-downloading-foto').is(":visible")) {
                $('.full_photo_check').show();
                $('.choice-block-things').hide();
            }
        }

        var showTab3 = function () {

            if ($('.hover-downloading-file').is(":visible")) {
                $('.full_download_check').show();
                $('.choice-block-things').hide();
                $('.download_file').text($(".fileDownload input").val());
                var string = $('.download_file').text();
                var ext = string.split('.').pop();
                if (ext == 'doc' || ext == 'docx') {
                    $(".picture-document").html('<img src="/img/order-relocation/tabs3/files/doc.svg">');
                }
                if (ext == 'pdf') {
                    $(".picture-document").html('<img src="/img/order-relocation/tabs3/files/pdf.svg">');
                }
                if (ext == 'xls' || ext == 'xlsx') {
                    $(".picture-document").html('<img src="/img/order-relocation/tabs3/files/xls.svg">');
                }
            }
        }

    }

    this.clearOtherInput = function () {

        $(".submission-btn").on('click', function (e) {

            if ($('.complete_checking_things').is(":visible")) {
                clearTab2();
                clearTab3();
            }
            ;
            if ($('.full_photo_check').is(":visible")) {
                clearTab1();
                clearTab3();
            }
            ;
            if ($('.full_download_check').is(":visible")) {
                clearTab1();
                clearTab2();
            }
            ;
        });
    };


    var clearTab1 = function () {

    }

    var clearTab2 = function () {
        $('.img-wrapp input[type=file]').remove();

    }
    var clearTab3 = function () {
        $('.fileDownload input').remove();
    }





this.fileControl();
this.uploadPhoto();
this.uploadFile();
this.showResult();
this.clearOtherInput();

}







