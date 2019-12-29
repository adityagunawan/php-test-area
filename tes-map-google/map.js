// NOTE: The actual working javascript code for this pen is located in the settings. I also include it here for display purposes. 
var peta;
var depok = {lat: -6.385589, lng: 106.830711};
var bekasi = {lat: -6.241586, lng:106.992416};
var marker;

function initMap() {
    peta = new google.maps.Map(document.getElementById('map'), {
        center: depok, // lat/long of center of map
        zoom:9,
        mapTypeId:google.maps.MapTypeId.ROADMAP
     });

    // membuat Marker
    var mapDepok = getMarker(peta, depok, 'kota depok');
    var mapBekasi = getMarker(peta, bekasi, 'kota bekasi');

    getInfo(peta, mapDepok, "ini adalah kota depok", depok);
    getInfo(peta, mapBekasi, "ini adalah kota bekasi", bekasi);

     // even listner ketika peta diklik
    google.maps.event.addListener(peta, 'click', function(event) {
        putMarker(this, event.latLng);
    });
}

function putMarker(peta, posisiTitik){
    // membuat hanya satu marker
    if( marker != null ){
        // pindahkan marker
        marker.setPosition(posisiTitik);
    } else {
        // buat marker baru
        marker = new google.maps.Marker({
            position: posisiTitik,
            map: peta
        });
    }

    // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
}

function getMarker(map, place, title) {
    var getMarker=new google.maps.Marker({
        position:  place,
        map: map,
        title: title,
        // animation: google.maps.Animation.BOUNCE,
        // icon: "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png" //custom icon
    });
    return getMarker;
}

function getInfo(map, marker, content, position) {
    // membuat objek info window
    var infowindow = new google.maps.InfoWindow({
        content: content,
        position: position
    });

    // event saat marker diklik
    marker.addListener('click', function() {
        // tampilkan info window di atas marker
        infowindow.close();
        infowindow.open(map, marker);
    });
}
// call function on load
// google.maps.event.addDomListener(window, 'load', initMap);