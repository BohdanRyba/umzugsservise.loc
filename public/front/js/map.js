$(function () {
    map();
});

    function map() {

    var center = [53.036176, 8.640440];
    var markerImage =  new google.maps.MarkerImage(
        "img/aboutUs/block4/map-placeholder.svg",
        null, /* size is determined at runtime */
        null, /* origin is 0,0 */
        null, /* anchor is bottom center of the scaled image */
        new google.maps.Size(42, 68)
    );

    $('#map_adress')
        .gmap3({
            center: center,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        })
        .marker(
            {
                position: [53.036176, 8.640440], icon: markerImage
            })


}











































//
// function map() {
//     var myLatLng = {lat: 50.783618, lng: 10.430925};
//
//     var map = new google.maps.Map(document.getElementById('map_adress'), {
//         zoom: 4,
//         center: myLatLng
//     });
//
//     var marker = new google.maps.Marker({
//         position: myLatLng,
//         map: map,
//     });
//
// }