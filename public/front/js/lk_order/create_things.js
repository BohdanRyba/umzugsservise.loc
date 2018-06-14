// $(function () {
//     filter_things();
//
// });
//
// function filter_things() {
//     $('.tab-content-things>div:not(":first-of-type")').hide();
//     $('.tab-menu-things button').each(function (i) {
//         $(this).attr('data-tab', 'tab' + i);
//     });
//     $('.tab-content-things .content-choice-things').each(function (i) {
//         $(this).attr('data-tab', 'tab' + i);
//     });
//     $('.tab-menu-things button').on('click', function (e) {
//         e.preventDefault();
//         var dataTab = $(this).data('tab');
//         var getWrapper = $(this).closest('.choise-catalog-things');
//         getWrapper.find('.tab-menu-things button').removeClass('active');
//         $(this).addClass('active');
//         getWrapper.find('.tab-content-things>.content-choice-things').hide();
//         getWrapper.find('.tab-content-things>.content-choice-things[data-tab=' + dataTab + ']').show();
//     });
// }
