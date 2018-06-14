$(function () {
    tabs_blog();

});
function   tabs_blog() {
    $('.tab-content .blog-content:not(":first-of-type")').hide();
    $('.tab-menu-blog li').each(function(i){
        $(this).attr('data-tab','tab'+i);
    });
    $('.tab-content .blog-content').each(function(i){
        $(this).attr('data-tab','tab'+i);
    })
    $('.tab-menu-blog li').on('click', function(){
        var dataTab = $(this).data('tab');
        var getWrapper = $(this).closest('.tab-wrapper');
        getWrapper.find('.tab-menu-blog li').removeClass('active');
        $(this).addClass('active');
        getWrapper.find('.tab-content .blog-content').hide();
        getWrapper.find('.tab-content .blog-content[data-tab='+dataTab+']').show();

    });
}