@extends('dashboard')

@section('content')
	@include('_partials.notice')
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div>
				<h2 class="text-center">Total Jobs Posting <span>{!! count($user_job_posts->toArray()) !!}</span></h2>
			</div>
		</div>
	</div>
	<div class="row">
		@if(!empty($user_job_posts->toArray()))
			@foreach($user_job_posts as $j)
			<div class="col-md-offset-3 col-md-6 form-group">
				<ul>
					<li><p class="text-center">Title:  {!! link_to(action('DashboardsController@show', $j->id ), $j->title ) !!} </p></li>
					<li><p class="text-center">Post On: {{ $j->created_at }} </p></li>
					<li>
						<div class="dashboard-btn-group">
							{!! link_to(action('DashboardsController@edit', $j->id ), 'Edit' ,['class' => 'btn btn-info']) !!}

							{!! Form::open([ 'method'  => 'DELETE', 'route' => [ 'dashboard.destroy', $j->id ] ]) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</div>
					</li>
				</ul>
				<hr/>
			</div>
			@endforeach
		@else
			<div class="col-md-offset-3 col-md-6 form-group">
				<p class="text-center">You never post any job before</p>
			</div>	
		@endif
	</div>
@stop