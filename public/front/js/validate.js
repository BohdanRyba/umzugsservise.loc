
$(function () {
    formsAllPages();
    password_matching();
});


function formsAllPages() {
    var asoc = {
        // общие
        'val' : 'Заявка с формы',
        'date_from' : 'Период хранения с :',
        'date_for' : 'Период хранения по :',
        'index_from': 'Индекс откуда',
        'index_adress': 'Индекс',
        'index_for': 'Индекс куда',
        'name': 'Имя',
        'phone': 'Номер телефона',
        'email': 'Е-mail',
        'radio-test': 'Обращение'
    };
    var heandle = "/plugin/aSendForm/assets/handle.php"
    var vRules = {
        rules: {
            name: {
                required: true
            },
            index: {
                required: true,
                digits: true,
                regex: /^([\(\)\+\- ]{0,2}[\d]){5,50}$/g
            },
            index_from: {
                required: true,
                digits: true,
                regex: /^([\(\)\+\- ]{0,2}[\d]){5,50}$/g
            },
            index_for: {
                required: true,
                digits: true,
                regex: /^([\(\)\+\- ]{0,2}[\d]){5,50}$/g
            },
            index_adress: {
                required: true,
                digits: true,
                regex: /^([\(\)\+\- ]{0,2}[\d]){5,50}$/g
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                regex: /^([\(\)\+\- ]{0,2}[\d]){3,50}$/g,
            },
            date_from: {
                required: true
            },
            date_for: {
                required: true
            },
            surname:{
                required: true
            },
            city:{
                required: true
            },
            adress:{
                required: true
            },
            password_new: {
                required: true,
                regex: /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/g,
            },
            password_repeat:{
                required: true
            }
        },

        messages: {
            name: {
                required: "Введите имя"
            },
            index: {
                required: "Введите индекс",
                digits: "Необходимо ввести цифры",
                regex: 'Введите 5 цифр'
            },
            index_from: {
                required: "Введите индекс",
                digits: "Необходимо ввести цифры",
                regex: 'Введите 5 цифр'
            },
            index_for: {
                required: "Введите индекс",
                digits: "Необходимо ввести цифры",
                regex: 'Введите 5 цифр'
            },
            index_adress: {
                required: "Введите индекс",
                digits: "Необходимо ввести цифры",
                regex: 'Введите 5 цифр'
            },

            date_from: {
                required: "Выберите дату"
            },
            date_for: {
                required: "Выберите дату"
            },
            email: {
                email: "Введите  электронный адрес",
                required: "Введите коректный электронный адрес"
            },
            phone: {
                required: "Введите свой номер телефона",
                regex: 'Нужно ввести только цифры',
            },
            surname: {
                required: "Введите фамилию"
            },
            city: {
                required: "Введите город"
            },
            adress: {
                required: "Введите адрес"
            },
            password_new: {
                required: "Введите новый пароль",
                regex: "Минимум 8 значений, буквы разного региста, цифры",
            },
            password_repeat: {
                required: "Повторите пароль"

            }
        }
    };
    $(".main_relocation").aSendForm({
        goal: function () {
            // ga('send', 'event', 'knopka', 'zakazat');
            // yaCounter26593851.reachGoal('send');
        },
        postQuery: heandle,
        closeData: 113000,
        associations: asoc,
        answer: function(){
            // $.fancybox.open({
            //     src  : '#answer',
            // })
            location.href = "order_move.php";

        },
        validateRuls: vRules,
        onSend : function(){
            $(".main_relocation")[0].reset();
            $.fancybox.close();

        }
    });
    $(".main_storage").aSendForm({
        goal: function () {
            // ga('send', 'event', 'knopka', 'zakazat');
            // yaCounter26593851.reachGoal('send');
        },
        postQuery: heandle,
        closeData: 113000,
        associations: asoc,
        answer: function(){
            // $.fancybox.open({
            //     src  : '#answer',
            // })
            location.href = "order_move.php";
        },
        validateRuls: vRules,
        onSend : function(){
            $(".main_storage")[0].reset();
            $.fancybox.close();

        }
    });
    $("#popup-partner").aSendForm({
        goal: function () {
            // ga('send', 'event', 'knopka', 'zakazat');
            // yaCounter26593851.reachGoal('send');
        },
        postQuery: heandle,
        closeData: 113000,
        associations: asoc,
        answer: function(){
            $.fancybox.open({
                src  : '#answer',
            })
        },
        validateRuls: vRules,
        onSend : function(){
            $("#popup-partner")[0].reset();
            $.fancybox.close();

        }
    });
    $("#popup-qustion").aSendForm({
        goal: function () {
            // ga('send', 'event', 'knopka', 'zakazat');
            // yaCounter26593851.reachGoal('send');
        },
        postQuery: heandle,
        closeData: 113000,
        associations: asoc,
        answer: function(){
            $.fancybox.open({
                src  : '#answer',
            })
        },
        validateRuls: vRules,
        onSend : function(){
            $("#popup-qustion")[0].reset();
            $.fancybox.close();

        }
    });
    $("#lk_profile").aSendForm({
        // goal: function () {
        //     // ga('send', 'event', 'knopka', 'zakazat');
        //     // yaCounter26593851.reachGoal('send');
        // },
        // postQuery: heandle,
        // closeData: 113000,
        // associations: asoc,
        // answer: function(){
        //     $.fancybox.open({
        //         src  : '#answer',
        //     })
        // },
        validateRuls: vRules,
        // onSend : function(){
        //     $("#lk_profile")[0].reset();
        //     $.fancybox.close();
        //
        // }
    });


}

function password_matching() {
    $(".profile-but button").attr('disabled',true).removeClass('hover-el');
    $("#password2").keyup(validate);
    function validate() {
        var password1 = $("#password1").val();
        var password2 = $("#password2").val();

        if(password1 == password2) {
            $(".profile-but button").removeAttr('disabled').addClass('hover-el');
            $(".profile-but").addClass('active_but_lk');
            $("#validate-status").text("");
        }
        else {
            $("#validate-status").text("Пароли не совпадают");
        }
    }
}