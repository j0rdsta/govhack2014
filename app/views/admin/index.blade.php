@extends('layouts.master')

@section('content')
@if (isset($errors))
    @foreach ($errors->all() as $errors)
        <div data-alert class="alert-box warning rounded">
            {{ $errors }}
        </div>
    @endforeach
@endif

@if (Session::has('error'))
    <div data-alert class="alert-box warning rounded">
        {{ Session::get('error') }}
    </div>
@endif
<section class="admin">
	<div class="row">
		<div class="medium-6 columns">
			<h4>Add Amenity</h4>
			{{Form::open(array('action' => 'AmenitiesController@store', 'data-parsley-validate' => 'true', 'enctype' => 'multipart/form-data'))}}	
				{{Form::text('name', null, array('data-parsley-required' => 'true', 'placeholder' => 'Amenity Name'))}}
				<select name="city_id" data-parsley-required="true">
					@foreach($cities as $city)
						<option value="{{$city->id}}">{{$city->name}}</option>
					@endforeach
				</select>
				{{Form::label('locations', 'Location Coordinates (KML/JSON/CSV)')}}
				{{Form::file('locations')}}
				{{Form::label('icon', 'Location Icon')}}
				{{Form::file('icon')}}
				{{Form::submit('Submit', array('class' => 'button tiny'))}}
			{{Form::close()}}
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
			<h4>Amenities</h4>
			<table>
				@foreach(Amenity::all() as $amenity)
					<tr>
						@if(File::exists(public_path('assets/amenities/icons/') . $amenity->id . ".png"))
							<td>{{HTML::image('assets/amenities/icons/' . $amenity->id . ".png")}}</td>
						@endif
						<td>{{$amenity->name}}</td>
					</tr>
				@endforeach
			</table>			
		</div>
		<div class="medium-6 columns">
			<h4>Cities</h4>
			<table>
				@foreach($cities as $city)
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