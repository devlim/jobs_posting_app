<!doctype html>

<html lang="en">

<head>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<script src="{{ URL::asset('JS/jquery-1.11.3.css') }}"></script>
	<script src="{{ URL::asset('JS/bootstrap.min.js') }}"></script>
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
</head>
<body>
	<header>
		<div class="jumbotron public">
		  	<div class="container">
		  		<div class="intro text-center">
		  			<h1 class="title">Jobs</h1>
		  			@if(Auth::check())
						<div class="row">
							<a href="{{action('DashboardsController@index')}}" class="btn btn-primary">Go to Dashboard</a>
			  			</div>
		  			@else
		  				<div class="row">
			  				<a href="/auth/login" class="btn btn-primary">Login</a>
							<a href="/auth/register" class="btn btn-warning">Register</a>
			  			</div>
		  			@endif
		  		</div>
		  	</div>
		</div>
	</header>
	<div class="container">
		@yield('content')
	</div>
</body>