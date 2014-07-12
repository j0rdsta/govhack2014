@extends('layouts.master')

@section('content')

<section class="admin">
	<div class="row">
		<div class="medium-6 columns">
			<h4>Add Amenity</h4>

		</div>
		<div class="medium-6 columns">
			<h4>Add City</h4>
			{{Form::open(array('action' => 'CitiesController@store', 'data-parsley-validate' => 'true'))}}
				
				{{Form::text('name', null, array('data-parsley-required' => 'true', 'placeholder' => 'City Name'))}}
				{{Form::text('lat', null, array('data-parsley-required' => 'true', 'placeholder' => 'Latitude'))}}
				{{Form::text('long', null, array('data-parsley-required' => 'true', 'placeholder' => 'Longitude'))}}
				{{Form::submit('Submit', array('class' => 'button tiny'))}}
			{{Form::close()}}
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="medium-6 columns">
			
		</div>
		<div class="medium-6 columns">
			<h4>Cities</h4>
			<table>
				@foreach(City::all() as $city)
					<tr>
						<td>{{$city->name}}</td>
						<td>{{$city->lat}}</td>
						<td>{{$city->long}}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>	

@endsection