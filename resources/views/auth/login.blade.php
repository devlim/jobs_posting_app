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
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}
            <div>
                <p class="text-center"><label for="email">Email</label></p>
                <p class="text-center"><input type="email" name="email" value="{{ old('email') }}"></p>
            </div>

            <div>
                <p class="text-center"><label for="passowrd" >Password</label></p>
                <p class="text-center"><input type="password" name="password" id="password"></p>
            </div>

            <div>
                <p class="text-center"><label for="remember">Remember Me</label><input type="checkbox"name="remember"> </p>
            </div>

            <div >
                <p class="text-center"><button type="submit" class="btn btn-primary">Login</button></p>
            </div>
        </form>
    <div>
</section>
@stop