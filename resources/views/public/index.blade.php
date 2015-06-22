@extends('public')

@section('content')
	<div class="row">
		@foreach($jobs as $j)
		<div class="col-md-offset-3 col-md-6 form-group">
			<ul>
				<p class="text-center">Title  :  {!! link_to(action('PublicsController@show', $j->id ), $j->title ) !!} </p>
				<p class="text-center">Post On: {{ $j->created_at }} </p>
			</ul>
		</div>
		<hr/>
		@endforeach
	</div>
@stop