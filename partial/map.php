<style>
.gmnoprint {
	display: none;
	}
	.gm-style-cc{
		display: none;
		}</style>
<!-- <script type="text/javascript" src="js/mapapi.js"></script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdIW3wvJYnqIfc7Uj0BvQkywVKixBSdOA&callback=initMap"
  type="text/javascript"></script>
<footer class="col-md-12 col-sm-12 col-xs-12" style="background-color: #060606;">
    <div class="col-md-3 col-sm-3 col-xs-12 logo" style="height: 385px;"> <img src="image/200_200.png" class="img-responsive" alt="logo-brew">
        <a href="https://www.google.co.in/maps/place/Over+the+Moon+Brew+Co./@17.440154,78.361907,15z/data=!4m5!3m4!1s0x0:0x2259b0abaed2b868!8m2!3d17.440154!4d78.361907?sa=X&ved=0ahUKEwjqxdiEkbvVAhVGv5QKHbkUCV4Q_BIIdjAK" target="_blank">
            <button type="button" class="reservation">Get Location</button>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: center;">
        <div id="map_canvas" class="map"></div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12 logo" style="height: 385px;"> <img src="image/OVERTHEMOON.png" class="img-responsive" alt="logo">
        <a href="https://www.google.co.in/maps/place/Over+The+Moon/@17.4366486,78.3986849,15z/data=!4m5!3m4!1s0x0:0xcbb0caa89bb19c6b!8m2!3d17.4366486!4d78.3986849" target="_blank">
            <button type="button" class="reservation">Get Location</button>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: center;">
        <div id="map_canvas_2" class="map"></div>
    </div>
</footer>
<script>
    function initialize() {
        var latlng = new google.maps.LatLng(17.440154, 78.361907);
        var latlng2 = new google.maps.LatLng(17.436649, 78.398685);
        var myOptions = {
        	zoomControl: false,
      mapTypeControl: false,
      draggable: false,
      scaleControl: false,
      scrollwheel: false,
      navigationControl: false,
      streetViewControl: false,
            zoom: 15
            , center: latlng
            , mapTypeId: google.maps.MapTypeId.ROADMAP
            , styles: [
                {
                    "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#242f3e"
                    }
                  ]
                }
                , {
                    "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#746855"
                    }
                  ]
                }
                , {
                    "elementType": "labels.text.stroke"
                    , "stylers": [
                        {
                            "color": "#242f3e"
                    }
                  ]
                }
                , {
                    "featureType": "administrative.locality"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#d59563"
                    }
                  ]
                }
                , {
                    "featureType": "poi"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#d59563"
                    }
                  ]
                }
                , {
                    "featureType": "poi.park"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#263c3f"
                    }
                  ]
                }
                , {
                    "featureType": "poi.park"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#6b9a76"
                    }
                  ]
                }
                , {
                    "featureType": "road"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#38414e"
                    }
                  ]
                }
                , {
                    "featureType": "road"
                    , "elementType": "geometry.stroke"
                    , "stylers": [
                        {
                            "color": "#212a37"
                    }
                  ]
                }
                , {
                    "featureType": "road"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#9ca5b3"
                    }
                  ]
                }
                , {
                    "featureType": "road.highway"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#746855"
                    }
                  ]
                }
                , {
                    "featureType": "road.highway"
                    , "elementType": "geometry.stroke"
                    , "stylers": [
                        {
                            "color": "#1f2835"
                    }
                  ]
                }
                , {
                    "featureType": "road.highway"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#f3d19c"
                    }
                  ]
                }
                , {
                    "featureType": "transit"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#2f3948"
                    }
                  ]
                }
                , {
                    "featureType": "transit.station"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#d59563"
                    }
                  ]
                }
                , {
                    "featureType": "water"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#17263c"
                    }
                  ]
                }
                , {
                    "featureType": "water"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#515c6d"
                    }
                  ]
                }
                , {
                    "featureType": "water"
                    , "elementType": "labels.text.stroke"
                    , "stylers": [
                        {
                            "color": "#17263c"
                    }
                  ]
                }
              ]
        };
        var myOptions2 = {
        zoomControl:false,

      mapTypeControl: false,
      draggable: false,
      scaleControl: false,
      scrollwheel: false,
      navigationControl: false,
      streetViewControl: false,
            zoom: 15
            , center: latlng2
            , mapTypeId: google.maps.MapTypeId.ROADMAP
            , styles: [
                {
                    "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#212121"
                    }
                  ]
                }
                , {
                    "elementType": "labels.icon"
                    , "stylers": [
                        {
                            "visibility": "off"
                    }
                  ]
                }
                , {
                    "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#757575"
                    }
                  ]
                }
                , {
                    "elementType": "labels.text.stroke"
                    , "stylers": [
                        {
                            "color": "#212121"
                    }
                  ]
                }
                , {
                    "featureType": "administrative"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#757575"
                    }
                  ]
                }
                , {
                    "featureType": "administrative.country"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#9e9e9e"
                    }
                  ]
                }
                , {
                    "featureType": "administrative.land_parcel"
                    , "stylers": [
                        {
                            "visibility": "off"
                    }
                  ]
                }
                , {
                    "featureType": "administrative.locality"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#bdbdbd"
                    }
                  ]
                }
                , {
                    "featureType": "poi"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#757575"
                    }
                  ]
                }
                , {
                    "featureType": "poi.park"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#181818"
                    }
                  ]
                }
                , {
                    "featureType": "poi.park"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#616161"
                    }
                  ]
                }
                , {
                    "featureType": "poi.park"
                    , "elementType": "labels.text.stroke"
                    , "stylers": [
                        {
                            "color": "#1b1b1b"
                    }
                  ]
                }
                , {
                    "featureType": "road"
                    , "elementType": "geometry.fill"
                    , "stylers": [
                        {
                            "color": "#2c2c2c"
                    }
                  ]
                }
                , {
                    "featureType": "road"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#8a8a8a"
                    }
                  ]
                }
                , {
                    "featureType": "road.arterial"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#373737"
                    }
                  ]
                }
                , {
                    "featureType": "road.highway"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#3c3c3c"
                    }
                  ]
                }
                , {
                    "featureType": "road.highway.controlled_access"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#4e4e4e"
                    }
                  ]
                }
                , {
                    "featureType": "road.local"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#616161"
                    }
                  ]
                }
                , {
                    "featureType": "transit"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#757575"
                    }
                  ]
                }
                , {
                    "featureType": "water"
                    , "elementType": "geometry"
                    , "stylers": [
                        {
                            "color": "#000000"
                    }
                  ]
                }
                , {
                    "featureType": "water"
                    , "elementType": "labels.text.fill"
                    , "stylers": [
                        {
                            "color": "#3d3d3d"
                    }
                  ]
                }
              ]
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        var map2 = new google.maps.Map(document.getElementById("map_canvas_2"), myOptions2);
        var myMarker = new google.maps.Marker({
            position: latlng
            , map: map
            , title: "OTMBrew"
        });
        var myMarker2 = new google.maps.Marker({
            position: latlng2
            , map: map2
            , title: "OTM"
        });
    }
</script>

<!-- AIzaSyBdIW3wvJYnqIfc7Uj0BvQkywVKixBSdOA -->