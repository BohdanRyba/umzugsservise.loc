$(function () {
    // steps_rel();
    // next_step();
    // active_cheked();
});

//
// function steps_rel() {
//     $('.step-content>div:not(":first-of-type")').hide();
//     $('.step-menu button').each(function (i) {
//         $(this).attr('data-tab', 'tab' + i);
//     });
//     $('.step-content .content-choice').each(function (i) {
//         $(this).attr('data-tab', 'tab' + i);
//     });
//     $('.step-menu button').on('click', function () {
//         var dataTab = $(this).data('tab');
//         var getWrapper = $(this).closest('.section-choice');
//         getWrapper.find('.step-menu button').removeClass('active');
//         $(this).addClass('active');
//         getWrapper.find('.step-content>.content-choice').hide();
//         getWrapper.find('.step-content>.content-choice[data-tab=' + dataTab + ']').show();
//     });
// }
//
// function next_step() {
//     $('.btnNext').click(function() {
//         event.preventDefault();
//         $('.nav-tabs  .active').next('button').trigger('click');
//     });
//     $('.btnPrevious').click(function() {
//         event.preventDefault();
//         $('.nav-tabs  .active').prev('button').trigger('click');
//     });
// }
//
// function active_cheked() {
//     $("input.add_service").on('change',(function(){
//         $(".hover-service").toggle();
//     }));
// }