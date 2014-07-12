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

function getMapData() {
	$.ajax({
		url: "amenitylocations"
	}).done(function(data) {
		mapData = data;

	    var infoWindow = new google.maps.InfoWindow(); 
	    var marker, i;
	    var bounds = new google.maps.LatLngBounds();
	
	    // Info Window Content
	    var infoWindowContent = [
	        ['<div class="info_content">' +
	        '<h3>London Eye</h3>' +
	        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
	        ['<div class="info_content">' +
	        '<h3>Palace of Westminster</h3>' +
	        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
	        '</div>']
	    ];
	    // Loop through our array of markers & place each one on the map  
	    for( i = 0; i < mapData.length; i++ ) {
	        var pos = new google.maps.LatLng(mapData[i]['lat'], mapData[i]['long']);
	        bounds.extend(pos);
	        marker = new google.maps.Marker({
	            position: pos,
	            map: map,
	            title: "Hello"
	        });
	        
	        // Allow each marker to have an info window    
	        google.maps.event.addListener(marker, 'click', (function(marker, i) {
	            return function() {
	                infoWindow.setContent(infoWindowContent[1][0]);
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