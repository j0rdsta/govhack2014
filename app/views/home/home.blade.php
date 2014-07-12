@extends("layouts.master")

@section("content")

<div class="container">
	<section>
		<div class="page-header">
			<h1>Google Maps</h1>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<h4>Toggle:</h4>
				<ul class="no-bullet toggles"></ul>
			</div>
			<div class="large-8 columns">
				<div id="map-canvas" class="flex-video"></div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div id="status"></div>
			</div>
		</div>
	</section>
</div>

@endsection