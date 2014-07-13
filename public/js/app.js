$(document).foundation();

// $(function() {
// 	$('ul.sidenav li.has-child').click(function() {
// 		$(this).find('ul.child').slideToggle();
// 	});
// });

// https://developers.google.com/maps/documentation/javascript/styling#styling_the_default_map
var styles = [
{
	stylers: [
	{ saturation: -20 }
	]
},
{
	featureType: "road",
	elementType: "geometry",
	stylers: [
	{ lightness: 100 },
	{ visibility: "simplified" }
	]
},
{
	featureType: "poi",
	elementType: "labels",
	stylers: [
	{ visibility: "off" }
	]
}
];

var amenities=[], map;

function initialize() {
	var goldcoast = new google.maps.LatLng(-28.0293756, 153.4218931);
	var myOptions = {
		zoom: 11,
		center: goldcoast,
		styles: styles
	}
	map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
	getMapData();

	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

			new google.maps.Marker({map: map, position: pos });

			map.setCenter(pos);
		}, function() {
			handleNoGeolocation(true);
		});
	} else {
		// Browser doesn't support Geolocation
		handleNoGeolocation(false);
	}

	function handleNoGeolocation(errorFlag) {
		if (errorFlag == true) {
			// alert("Geolocation service failed.");
			initialLocation = goldcoast;
		} else {
			// alert("Your browser doesn't support geolocation. We've placed you in Siberia.");
			initialLocation = goldcoast;
		}
		map.setCenter(initialLocation);
	}

}

var mapData = [];

function getMapData() {
    $.ajax({
		url: "amenities"
	}).done(function(amenityData) {
		amenities = amenityData;
		$(".spinner").fadeOut(300, function(){
			$("ul.toggles").fadeIn(300);
		});
	});
	$.ajax({
		url: "amenitylocations"
	}).done(function(data) {
		mapData = data;

	    var infoWindow = new google.maps.InfoWindow();
	    var marker, i, amenity;
	    var bounds = new google.maps.LatLngBounds();

	    // Loop through our array of markers & place each one on the map
	    for( i = 0; i < mapData.length; i++ ) {
	        var pos = new google.maps.LatLng(mapData[i]['lat'], mapData[i]['long']);
	        bounds.extend(pos);
	        marker = new google.maps.Marker({
	            position: pos,
	            map: map,
	            title: mapData[i]['amenity']['name'],
	            icon: '/assets/amenities/icons/' + mapData[i]['amenity_id'] + '.png',
	            category: mapData[i]['amenity']['slug']
	        });

		    // Info Window Content
		    var infoWindowContent = [
		        ['<div class="info_content">' +
		        '<h3><img src="/assets/amenities/icons/'+mapData[i]['amenity_id']+'.png">&nbsp;&nbsp;'+ mapData[i]['amenity']['name'] +'</h3>' +
		        '<p align="center"><a href="#" class="button tiny">Get directions</a></p>' +        '</div>']
		    ];

	        // Allow each marker to have an info window
	        google.maps.event.addListener(marker, 'click', (function(marker, i) {
	            return function() {
	                infoWindow.setContent(infoWindowContent[0][0]);
	                infoWindow.open(map, marker);
	            }
	        })(marker, i));

	    }

	    map.fitBounds(bounds);

		createToggles();
	});
}

function createToggles() {
	var toggles = "";
	if (!amenities.length) {
		toggles += '<li>Failed to get toggles. <a href="#" onclick="getMapData()">Retry?</a></li>';
	} else {
		for (var i = 0; i < amenities.length; i++) {
			toggles += '<li><input type="checkbox" id="'+amenities[i].slug+'" onclick="toggleLayers('+i+');"/> '+amenities[i].name+'</li>';
		}
	}
	$("ul.toggles").html(toggles);
}

function toggleLayers(i)
{
	if(amenities[i].getMap()==null) {
		amenities[i].setMap(map);
	}
	else {
		amenities[i].setMap(null);
	}
	// document.getElementById('status').innerHTML += "toggleLayers("+i+") [setMap("+layers[i].getMap()+"] returns status: "+layers[i].getStatus()+"<br>";
}

google.maps.event.addDomListener(window, 'load', initialize);