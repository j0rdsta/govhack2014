@extends("layouts.master")

@section('title')
Map
@endsection

@section("content")

<div class="container">
	<section class="content">
		<div class="map">
			<div id="map-canvas" class="flex-video"></div>
			<section class="map-tools">
				<dl class="accordion" data-accordion>
					<dd class="accordion-navigation">
						<a href="#panel1">Toggle</a>
						<div id="panel1" class="content active">
							<ul class="no-bullet toggles hide"></ul>
							<div class="spinner">
								<div class="double-bounce1"></div>
								<div class="double-bounce2"></div>
							</div>
						</div>
					</dd>
				</dl>
			</section>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div id="status"></div>
			</div>
		</div>

	</section>
</div>

@endsection