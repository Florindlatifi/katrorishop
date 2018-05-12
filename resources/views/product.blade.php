@extends('layouts.default')

@section('content')
<div class="row">
<div class="col-xs-12 col-sm-4">

		@include('includes.sidebar')

</div>

<div class="col-xs-12 col-sm-8"> <!-- Start of content -->

  <div class="row">
    
      <div class="col-xs-12 col-sm-12">
        <div id="images">
          @if($post->img_1 != NULL)
            <a href="{{$post->img_1}}"><img src="{{$post->img_1}}" class="small"/></a>
          @endif
          @if($post->img_2 != NULL)
            <a href="{{$post->img_2}}"><img src="{{$post->img_2}}" class="small" /></a>
          @endif
          @if($post->img_3 != NULL)
            <a href="{{$post->img_3}}"><img src="{{$post->img_3}}" class="small" /></a>
          @endif
          @if($post->img_4 != NULL)
            <a href="{{$post->img_4}}"><img src="{{$post->img_4}}" class="small" /></a>
          @endif
          @if($post->img_5 != NULL)
            <a href="{{$post->img_5}}"><img src="{{$post->img_5}}" class="small" /></a>
          @endif
          <hr>
        </div>
      </div>
     
  </div>

  <div class="row">

  <table class="table table-bordered fixed">
    <tbody>
        <col width="75px" />
        <col width="300px" />
      <tr class="techSpecRow">
        <th colspan="2">Product Details</th>
      </tr>
      <tr class="techSpecRow">
        <td class="techSpecTD1">Title: </td>
        <td class="techSpecTD2">{{ $post->title }}</td>
      </tr>
      <tr class="techSpecRow">
        <td class="techSpecTD1">Category:</td>
        <td class="techSpecTD2">
          <a href="{{ route('category', ['id' => $post->category->id]) }}">{{ $post->category->name }}</a>
        </td>
      </tr>
      <tr class="techSpecRow">
        <td class="techSpecTD1">Location:</td>
        <td class="techSpecTD2">{{ $post->location->city }}</td>
      </tr>
      <tr class="techSpecRow">
        <td class="techSpecTD1">Posted by:</td>
        <td class="techSpecTD2">
          <a href="{{ route('user', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a>
        </td>
      </tr>
      <tr class="techSpecRow">
        <td class="techSpecTD1">Date:</td>
        <td class="techSpecTD2">{{ $post->created_at }}</td>
      </tr>
      <tr class="techSpecRow">
        <td class="techSpecTD1">Description:</td>
        <td class="techSpecTD2">{{ $post->description }}</td>
      </tr>
      <tr class="techSpecRow">
        <td class="techSpecTD1">share:</td>
        <td class="techSpecTD2">
          <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
          target="_blank">
          Share on Facebook
          </a> | 
          <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
          target="_blank">
          Share on Twitter
          </a> | 
          <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
          target="_blank">
          Share on Google
          </a>
        </td>
      </tr>
    </tbody>
  </table>



  </div>
</div> <!-- End of content -->


</div>


@stop

