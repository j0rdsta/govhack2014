@extends("layouts.master")

@section("content")

<div class="container">
	<section id="map" ng-cloak>
		<div class="page-header">
			<h1>Google Maps</h1>
		</div>
		<div ng-controller="MapCtrl">
			<div class="row">
				<div class="large-12 columns">
					<!--Giving the div an id="map_canvas" fix problems with twitter bootstrap affecting google maps-->
					<div id="map_canvas" ui-map="myMap" class="flex-video map" ui-options="mapOptions"></div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection