@extends('public')
@section('content')
<section  class="center-block">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <a href="/">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
            @include('errors.form')
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div>
                <p class="text-center"><label for="name">Name</label></p>
                <p class="text-center"><input type="text" name="name" value="{{ old('name') }}"></p>
            </div>

            <div>
                <p class="text-center"><label for="email">Email</label></p>
                <p class="text-center"><input type="email" name="email" value="{{ old('email') }}"></p>    
            </div>

            <div>
                <p class="text-center"><label for="contact_no">Contact Number</label></p>
                <p class="text-center"><input type="text" name="contact_no" value="{{ old('contact_no') }}"></p>    
            </div>

            <div>
                <p class="text-center"><label for="password">Password</label></p>
                <p class="text-center"><input type="password" name="password"></p>    
            </div>

            <div>
                <p class="text-center"><label for="password">Confirm Password</label></p>
                <p class="text-center"><input type="password" name="password_confirmation"></p>    
            </div>

            <div>
                <p class="text-center"><button type="submit" class="btn btn-warning">Register</button> </p>
             </div>
        </form>
    </div>
</section>
@stop