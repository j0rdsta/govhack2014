@extends("layouts.master")

@section('title')
Google Map
@endsection

@section("content")

<div class="container">
	<section class="content">
		<div id="map-canvas" class="flex-video"></div>
		
		<section class="map-tools">
			<h4>Toggle:</h4>
			<ul class="no-bullet toggles"></ul>
		</section>

		<div class="row">
			<div class="large-12 columns">
				<div id="status"></div>
			</div>
		</div>
	</section>
</div>

@endsection