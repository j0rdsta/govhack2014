$(document).foundation();


$(function() {
	$('ul.sidenav li.has-child').click(function() {
		$(this).find('ul.child').slideToggle();
	});
});
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

var layers=[], map;

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
var marker;
function getMapData() {
	$.ajax({
		url: "amenitylocations"
	}).done(function(data) {
		mapData = data;

		var infoWindow = new google.maps.InfoWindow(), marker, i;
	    // Loop through our array of markers & place each one on the map  
	    for( i = 0; i < mapData.length; i++ ) {
	    	console.log(mapData[i]['lat']);
	        var position = new google.maps.LatLng(mapData[i]['lat'], mapData[i]['long']);
	        marker = new google.maps.Marker({
	            position: position,
	            map: map
	            // title: markers[i][0]
	        });
	        
	        // Allow each marker to have an info window    
	        google.maps.event.addListener(marker, 'click', (function(marker, i) {
	            return function() {
	                infoWindow.setContent(infoWindowContent[i][0]);
	                infoWindow.open(map, marker);
	            }
	        })(marker, i));

	    }		

		createToggles();
	});
}

function createToggles() {
	var toggles = "";
	for (var i = 0; i < layers.length; i++) {
		toggles += '<li><input type="checkbox" id="layer_'+i+'" onclick="toggleLayers('+i+');"/> '+layers[i].name+'</li>';
	}
	$("ul.toggles").html(toggles);
}

function toggleLayers(i)
{
	if(layers[i].getMap()==null) {
		layers[i].setMap(map);
	}
	else {
		layers[i].setMap(null);
	}
	// document.getElementById('status').innerHTML += "toggleLayers("+i+") [setMap("+layers[i].getMap()+"] returns status: "+layers[i].getStatus()+"<br>";
}

google.maps.event.addDomListener(window, 'load', initialize);