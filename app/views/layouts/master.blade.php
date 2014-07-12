<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Site Name - @yield('title')</title>
	<!-- <link rel="icon" href="{{Asset('/favicon.png')}}" TYPE="image/png"> -->
	{{ HTML::style('css/app.css') }}
	{{ HTML::style('css/font-awesome.css') }}
	{{ HTML::script('bower_components/modernizr/modernizr.js') }}

</head>

<body>

	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')

	{{ HTML::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyC_7jBY0INF24r5Pt1xtbVQJVn_wFvwsfg&sensor=true') }}
	{{ HTML::script('build/js/app.min.js?v=1.1') }}

</body>
</html>