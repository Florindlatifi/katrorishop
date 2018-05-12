@extends('layouts.default')

@section('content')


<div class="col-xs-12 col-sm-5 mx-auto"> <!-- Start of content -->

    @if ($errors->any())
        <div class="alert alert-danger mt-5">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

				
    <form method="POST" action="{{ route('login') }}" class="mt-5">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="email">Email adress</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">LOG IN</button>
        </div>

        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a><br/>
        <a class="btn btn-link" href="{{ route('register') }}">Register</a><br/>
        <a class="btn btn-link" href="{{ route('google_login') }}">Login with google</a>
        <a class="btn btn-link" href="{{ route('facebook_login') }}">Login with facebook</a>

    </form>

</div> <!-- End of content -->


@stop