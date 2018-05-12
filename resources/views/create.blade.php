@extends('layouts.default')

@section('content')

<div class="row">
<div class="col-xs-12 col-sm-12"> <!-- Start of content -->


<div class="row">
    <div class="col-xs-12 col-sm-12">
        <h3 class="text-center">Upload a post</h3>
        <hr/>
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            
            {{ csrf_field() }}

            <div class="form-row">
                <div class="col-xs-12 col-sm-5 mx-auto text-center">
                        <label>Title: </label>
                        <input type="text" class="form-control" name="title" />
                </div>
            </div>

            <div class="form-row">
                    <div class="col-xs-12 col-sm-5 mx-auto text-center">
                            <label>Description: </label>
                            <input type="text" class="form-control" name="description" />
                    </div>
                </div>

                <div class="form-row">
                        <div class="col-xs-12 col-sm-5 mx-auto text-center">
                            <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}" />
                        </div>
                </div>
                <div class="form-row">
                <div class="col-xs-12 col-sm-5 mx-auto text-center">
                        <label>Price: </label>
                        <input type="number" class="form-control" name="price" />
                </div>
            </div>
                <div class="form-row">
                <div class="col-xs-12 col-sm-5 mx-auto text-center">
                    <label>Category:</label>
                    <select class="custom-select" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-xs-12 col-sm-5 mx-auto text-center">
                    <label>Location:</label>
                    <select class="custom-select" name="location_id">
                        @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->city }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                <br/>
                <div class="form-row">
                    <div class="col-xs-12 col-sm-7 mx-auto">
                    <div class="form-row">
                        <div class="col-xs-12 col-sm-6 mx-auto">
                                <input type="file" class="form-control" name="input_img1" id="input_img1">
                                <input type="file" class="form-control" name="input_img2" id="input_img2">
                        </div>
                        <div class="col-xs-12 col-sm-6 mx-auto">
                                <input type="file" class="form-control" name="input_img3" id="input_img3">
                                <input type="file" class="form-control" name="input_img4" id="input_img4">
                        </div>
                        <div class="col-xs-12 col-sm-6 mx-auto">
                                <input type="file" class="form-control" name="input_img5" id="input_img5">
                        </div>
                    </div>
                </div>
             </div>
             <br/>
            <div class="form-row">
                <div class="col-xs-12 col-sm-5 mx-auto text-center">
                    <input type="submit" class="btn btn-outline-primary" value="Upload" name="submit">
                </div>
            </div>
        </form>
    </div>
</div>


</div> <!-- End of content -->

</div>



@stop