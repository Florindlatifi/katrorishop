@extends('layouts.default')

@section('content')
<div class="row">
<div class="col-xs-12 col-sm-2">

		@include('includes.sidebar')

</div>

<div class="col-xs-12 col-sm-10"> <!-- Start of content -->

    <h1 class="text-center">My Posts</h1>
    <h6 class="text-center">Jonied: 25/01/2018</h6>
	<a href="{{ route('profile.edit') }}" >Edit Profile <i class="far fa-edit" style="font-size:30px;"></i></a>
	<a href="{{ route('favourites') }}" style="float:right;">Favourites <i class="fas fa-bookmark" style="font-size:30px;"></i> </a>
	<br>
    <hr>

@foreach($posts as $post)

<div class="card" id="cards"> <!-- Card start -->
	
	<div class="row">
		<div class="col-xs-12 col-sm-3">
			<div class="img-small">
				<a href="{{ route('product', ['id' => $post->id]) }}">
					<img class="card-img" src="{{ $post->img_1 }}" alt="Card image cap">
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
				<a href="{{ route('product', ['id' => $post->id]) }}"><h4 class="card-title">{{ str_limit($post->title, 25) }}</h4></a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<h4 class="card-title">{{ str_limit($post->price, 7) }}€</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<p class="card-text">{{ str_limit($post->description, 110) }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<p class="card-text"><small class="text-muted">Created: {{ $post->created_at }}</small></p>
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-xs-12 col-sm-3">
					Category: <br> <a href="{{ route('category', ['id' => $post->category->id]) }}">{{ $post->category->name }}</a>
				</div>
				<div class="col-xs-12 col-sm-3">
					Location: <br> <a href="{{ route('location', ['id' => $post->location->id]) }}">{{ $post->location->city }}</a>
				</div>
				<div class="col-xs-12 col-sm-3">
					Posted by: <br> <a href="{{ route('user', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-1">
			<form action="{{ route('post.edit') }}" method="post"> 
				{{ csrf_field()}}
				<input type="hidden" value="{{ $post->id }}" name="post_id" />
				<input  class="btn btn-warning" id="edit-button" type="submit" value="Edit" />
			</form>
		</div>
		<div class="col-xs-12 col-sm-1">
			<form action="{{ route('post.delete') }}" method="post"> 
				{{ csrf_field()}}
				<input type="hidden" value="{{ $post->id }}" name="post_id" />
				<input  class="btn btn-danger" id="delete-button" type="submit" value="Delete" />
			</form>
		</div>
	</div>

</div> <!-- Card end -->





@endforeach

</div> <!-- End of content -->

</div>



@stop