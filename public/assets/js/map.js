function initMap() {

    var styleArray = [
        {
            featureType: "all",
            stylers: [
                { saturation: -80 }
            ]
        },
        {
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
                { hue: "#00ffee" },
                { saturation: 50 }
            ]
        },
        {
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
                { visibility: "off" }
            ]
        }
    ];

    var latlng = new google.maps.LatLng(41.278171, 69.261913); 
    var map = new google.maps.Map(document.getElementById("map"), {
        center: latlng, 
        scrollwheel: false,
        styles: styleArray,
        zoom: 16
    });

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: "China Travel manzili" 
    });
}
