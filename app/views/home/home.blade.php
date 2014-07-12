@extends("layouts.master")

@section("content")

<div class="container">
	<section class="content">
		<!-- <div class="row"> -->
<!-- 			<div class="large-4 columns">
				
			</div> -->
			<!-- <div class="large-8 columns"> -->
		<div id="map-canvas" class="flex-video"></div>
		
		<section class="map-tools">
			<h4>Toggle:</h4>
			<ul class="no-bullet toggles"></ul>
		</section>

			<!-- </div> -->
		<!-- </div> -->
		<div class="row">
			<div class="large-12 columns">
				<div id="status"></div>
			</div>
		</div>
	</section>
</div>

@endsection