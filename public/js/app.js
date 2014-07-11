$(document).foundation();

function onGoogleReady() {
	console.log('Google maps api initialized.');
	angular.bootstrap(document.getElementById('map'), ['doc.ui-map']);
}

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

angular.module('doc.ui-map', ['ui.map'])
.controller('MapCtrl', ['$scope', function ($scope) {

	$scope.myMarkers = [];

	$scope.mapOptions = {
		center: new google.maps.LatLng(-28.0293756, 153.4218931),
		zoom: 11,
		styles: styles
	};

}])
;