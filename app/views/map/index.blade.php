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
				<li class="has-child"><a href="#">Plan a journey</a>
					<ul class="child">
						<li><a href="#">Sub child</a></li>
						<li><a href="#">Sub child</a></li>
						<li><a href="#">Sub child</a></li>
						<li><a href="#">Sub child</a></li>
					</ul>
				</li>
				<li><a href="#">Get Directions</a></li>
				<li><a href="#">Filter Map</a></li>
				<li><a href="#">Quick Locations</a></li>
			</ul>
		</section>	
	</section>
</div>

@endsection