$(function () {
    slider_popup();
});
function slider_popup(){
    $.fancybox.defaults.afterShow = function(){
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                slideshow: false,
                itemWidth: 140,
                itemMargin: 6,
                asNavFor: '#slider'
            });
            $('#slider').flexslider({
                animation: "slide",
                controlNav: true,
                navigation:false,
                slideshow: false,
                sync: "#carousel"
            });
    };
}