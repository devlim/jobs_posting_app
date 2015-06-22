<!doctype html>

<html lang="en">

<head>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<script src="{{ URL::asset('JS/jquery-1.11.3.css') }}"></script>
	<script src="{{ URL::asset('JS/bootstrap.min.js') }}"></script>
</head>
<body>
	<header class="dashboard-header">
		<div class="container dashboard-container">
	        <div id="navbar" >
				<ul class=" navbar-nav">
					<li><a class="navbar-brand" href="#">Jobs</a></li>
				</ul>
	        </div><!--/.nav-collapse -->
	        <div id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="{{action('DashboardsController@create')}}">Post new job</a></li>
					<li><a href="/auth/logout">Logout</a></li>
				</ul>
	        </div>
      </div>
	</header>
	<div class="container">
		@yield('content')
	</div>
</body>