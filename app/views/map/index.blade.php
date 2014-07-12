@extends("layouts.master")

@section('title')
Google Map
@endsection

@section("content")

<div class="container">
	<section class="content">
		<div class="map">
			<div id="map-canvas" class="flex-video"></div>
			<section class="map-tools">
				<h4>Toggle:</h4>
				<ul class="no-bullet toggles"></ul>
			</section>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div id="status"></div>
			</div>
		</div>

		<section class="sidebar">
			<ul class="sidenav">
				<li><a href="#">Plan a journey</a></li>
				<li><a href="#">Plan a journey</a></li>
				<li><a href="#">Plan a journey</a></li>
				<li><a href="#">Plan a journey</a></li>
			</ul>
		</section>	
	</section>
</div>

@endsection