
var google;

function init() {
    var myLatlng = new google.maps.LatLng(11.238196, -74.2091426,15.75);
    
    var mapOptions = {
        zoom: 15,
        center: myLatlng,
        scrollwheel: false,
        styles: [
            {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "hue": "#ff0000"
                    }
                ]
            }
        ]
    };

    var mapElement = document.getElementById('map');


    var map = new google.maps.Map(mapElement, mapOptions);

            new google.maps.Marker({

                map: map,
                icon: 'images/loc.png'
            });

    
}
google.maps.event.addDomListener(window, 'load', init);