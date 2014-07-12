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

function initialize() {
	var chicago = new google.maps.LatLng(41.875696,-87.624207);
	var goldcoast = new google.maps.LatLng(-28.0293756, 153.4218931);
	var mapOptions = {
		zoom: 11,
		center: goldcoast,
		styles: styles
	}

	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var roadClosures = new google.maps.KmlLayer({
		url: 'http://data.gov.au/dataset/eb431735-a2cf-4abd-acf3-f84a099d0b02/resource/5e59cd33-8729-4b54-998f-f59167a74f94/download/gcroadclosure.kml',
		suppressInfoWindows: true,
	});
	roadClosures.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);