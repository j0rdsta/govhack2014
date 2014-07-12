$(document).foundation();

// https://developers.google.com/maps/documentation/javascript/styling#styling_the_default_map
var styles = [
{
	stylers: [
	{ hue: "#00ffe6" },
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

var layers=[];

layers[0] = new google.maps.KmlLayer({
	// Road Closures
	url: 'http://data.gov.au/dataset/eb431735-a2cf-4abd-acf3-f84a099d0b02/resource/5e59cd33-8729-4b54-998f-f59167a74f94/download/gcroadclosure.kml',
	name: 'Road Closures',
	suppressInfoWindows: true,
	preserveViewport: true
});

layers[1] = new google.maps.KmlLayer({
	// Outdoor Tables
	url: 'http://data.gov.au/dataset/03ad85ac-3259-4f6f-9479-509ea4b8957d/resource/4f6f5d8f-c343-4014-a009-e08101ecc7ff/download/tableoutdoor.kmz',
	name: 'Outdoor Tables',
	suppressInfoWindows: true,
	preserveViewport: true
});

var map;

function initialize() {
	var goldcoast = new google.maps.LatLng(-28.0293756, 153.4218931);
	var myOptions = {
		zoom: 11,
		center: goldcoast,
		styles: styles
	}
	map = new google.maps.Map(document.getElementById("map-canvas"),myOptions);
	createToggles();

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

function createToggles() {
	var toggles = "";
	for (var i = 0; i < layers.length; i++) {
		console.log(layers[i]);
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