@extends('layouts.default')

@section('content')


<div class="col-xs-12 col-sm-5 mx-auto"> <!-- Start of content -->
				
    <form method="POST" action="{{ route('login') }}" class="mt-5">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="email">Email adress</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Send reset link</button>
        </div>

    </form>

</div> <!-- End of content -->


@stop