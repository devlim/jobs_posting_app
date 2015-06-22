@extends('dashboard')
@section('content')

<section  class="center-block">
	<div class="row">
	<div class="row">
        <div class="col-md-12">
            <div class="pull-left">
               <a href="{{action('DashboardsController@index')}}">Cancel</a>
            </div>
        </div>
    </div>
	</div>
	<div class="row">
		@include('errors.form')

		{!! Form::model($job, ['method'=>'PATCH', 'action'=>['DashboardsController@update', $job->id]]) !!}
			<div>	
				
				<p class="text-center">{!! Form::label('title', 'Job Title:') !!}</p>
				<p class="text-center">{!! Form::text('title', null) !!}</p>
				
			</div>

			<div>	
				<p class="text-center">{!! Form::label('location', 'Job Location:') !!}</p>
				<p class="text-center">{!! Form::text('location', null) !!}</p>
			</div>
			
			<div>	
				<p class="text-center">{!! Form::label('salary_min', 'Min Salary:') !!}</p>
				<p class="text-center">{!! Form::text('salary_min', null) !!}</p>
			</div>

			<div>
			<p class="text-center">{!! Form::label('salary_max', 'Max Salary:') !!}</p>
			<p class="text-center">{!! Form::text('salary_max', null) !!}</p>
			</div>

			<div>
				
				<p class="text-center">{!! Form::label('desc', 'Job Description:') !!}</p>
				<p class="text-center">{!! Form::textarea('desc', null, ['rows'=>5]) !!}</p>
				
			</div>

			<div>
				
					<p class="text-center">{!! Form::hidden('category_id', 1) !!}</p>
					<p class="text-center">{!! Form::submit('Post Jobs', ['class'=>'btn btn-warning']) !!}</p>
				
			</div>
		{!! Form::close() !!}
	</div>
</section>
@stop
