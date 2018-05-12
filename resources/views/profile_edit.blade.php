@extends('layouts.default')

@section('content')

<div class="row">

<div class="col-xs-12 col-sm-2">

		@include('includes.sidebar')

</div>

<div class="col-xs-12 col-sm-10"> <!-- Start of content -->

	<form method="POST" action="{{ route('profile.update') }}"  class="mt-5">

        {{ csrf_field() }}

    	<div class="form-group">
            <label for="name">Full name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success">SUBMIT</button>
        </div>
	</form>


</div> <!-- End of content -->

</div>



@stop