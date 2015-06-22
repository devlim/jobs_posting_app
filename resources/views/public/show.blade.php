@extends('public')

@section('content')
	<section class="row">
		<div class="col-md-12">
			<div class="pull-left">
				<a href="/">Back</a>
			</div>
		</div>
		<div class="col-md-offset-3 col-md-6">
			<ul class="single-job-display">
				<li><p>Title: <span class="value">{{ $job->title }}</span></p></li>
				<li><p>Location: <span class="value">{{ $job->location }}</span></p></li>
				<li><p>Desciption: <span class="value">{{ $job->desc }}</span></p></li>
				<li><p>Minumum Salary: <span class="value">{{ $job->salary_min }}</span></p></li>
				<li><p>Maximum Salary: <span class="value">{{ $job->salary_max }}</span></p></li>
				<li><p>Contact: <span class="value">{{ $job->user->email }}</span></p></li>
				<li><p>Contact: <span class="value">{{ $job->user->contact_no }}</span></p></li>
				<li><p>Post On: <span class="value">{{ $job->created_at }} </span></p></li>
			</ul>
		</div>
		<hr/>
	</section>
@stop