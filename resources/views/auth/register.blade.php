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

    <form method="POST" action="{{ route('register') }}"  class="mt-5">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">Email adress</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">REGISTER</button>
        </div>

        <a class="btn btn-link" href="{{ route('login') }}">Log in</a>

    </form>

</div> <!-- End of content -->


@stop