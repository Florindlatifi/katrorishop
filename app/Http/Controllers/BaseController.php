<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Post;
use App\electronic;
use App\User;
use App\Favourite;
use Auth;
use View;


class BaseController extends Controller
{

    public function __construct()
    {
      View::share('side_categories', Category::all());
      View::share('side_locations', Location::all());
      View::share('categories', Category::all());
      View::share('locations', Location::all());
      $query = '';
      View::share('query', $query);
    }
    
/*****************Home Page********************/
    public function index(){

        return view('index')->with('posts', Post::all());

    }
/*********************************************/

/***************Product Details***************/
    public function product($id){

        $post = Post::find($id);

        return view('product')->with('post', $post);

    }
/*********************************************/

/***************Products by user***************/
    public function user($id){

        if(Auth::check()){
            if(Auth::id() == $id){
                return redirect()->route('profile');
            }
        }
        $user = User::find($id);
        $posts = Post::where('user_id', $id)->get();

        return view('user')->with('posts',$posts)
                           ->with('user', $user);
    }
/*********************************************/

/***************Products by category***************/
    public function category($id){

        $category = Category::find($id);
        $posts = Post::where('category_id', $id)->get();

        return view('category')->with('posts', $posts)
                               ->with('category', $category);

    }
/*********************************************/

/***************Products by location***************/
    public function location($id){

        $location = Location::find($id);
        $posts = Post::where('location_id', $id)->get();

        return view('location')->with('posts',$posts)
                               ->with('location', $location);
    }
/*********************************************/

/***************Add Product Form***************/
    public function create(){

        return view('create');

    }
/*********************************************/

/***************Edit Product Form***************/
    public function store(Request $request){
                
        $post = new Post;

        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $user_id = $request->user_id;

        $category = Category::find($category_id);
        $location = Location::find($location_id);
        $user = User::find($user_id);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->price = $request->price;
        $post->category_id = $category_id;
        $post->location_id = $location_id;
        $post->user_id = $user_id;
        $post->category_name = $category->name;
        $post->location_name = $location->city;
        $post->user_name = $user->name;


        /**********************************
         * 
         *  Upload images with Cloudder
         ***/
        
        if($request->hasFile('input_img1')){  
        
            \Cloudder::upload($request->file('input_img1'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_1 = $c['url'];
            }
        }
        if($request->hasFile('input_img2')){
            \Cloudder::upload($request->file('input_img2'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_2 = $c['url'];
            }
        }
        if($request->hasFile('input_img3')){
            \Cloudder::upload($request->file('input_img3'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_3 = $c['url'];
            }
        }
        if($request->hasFile('input_img4')){
            \Cloudder::upload($request->file('input_img4'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_4 = $c['url'];
            }
        }
        if($request->hasFile('input_img5')){
            \Cloudder::upload($request->file('input_img5'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_5 = $c['url'];
            } 
        }         
        /* end of img upload  */

        $post->save();

        return redirect()->route('index');

    }
/*********************************************/

/***************Edit Product Form***************/
    public function edit(Request $request){

        $id = $request->post_id;
        $post = Post::find($id);
        
        return view('edit')->with('post', $post);

    }
/*********************************************/

/***************Edit Product Form***************/
    public function update(Request $request){

        $id = $request->post_id;
        $post = Post::find($id);

        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $user_id = $request->user_id;

        $category = Category::find($category_id);
        $location = Location::find($location_id);
        $user = User::find($user_id);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->price = $request->price;
        $post->category_id = $category_id;
        $post->location_id = $location_id;
        $post->user_id = $user_id;
        $post->category_name = $category->name;
        $post->location_name = $location->city;
        $post->user_name = $user->name;


        /* Upload images with Cloudder*/
        if($request->hasFile('input_img1')){  
        
            \Cloudder::upload($request->file('input_img1'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_1 = $c['url'];
            }
        }
        if($request->hasFile('input_img2')){
            \Cloudder::upload($request->file('input_img2'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_2 = $c['url'];
            }
        }
        if($request->hasFile('input_img3')){
            \Cloudder::upload($request->file('input_img3'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_3 = $c['url'];
            }
        }
        if($request->hasFile('input_img4')){
            \Cloudder::upload($request->file('input_img4'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_4 = $c['url'];
            }
        }
        if($request->hasFile('input_img5')){
            \Cloudder::upload($request->file('input_img5'));
            $c=\Cloudder::getResult();             
            if($c){
                $post->img_5 = $c['url'];
            } 
        }         
        /* end of img upload  */

        $post->save();

        return redirect()->route('profile');

    }
/*********************************************/

/***************Edit Product Form***************/
    public function delete(Request $request){

        $id = $request->post_id;
        $post = Post::find($id);
        $post->delete();
        
        return redirect()->route('profile');

    }
/*********************************************/

/**********My favourites************/
public function favourites(){
    
    $user_id = Auth::id();
    $favourites = Favourite::where('user_id', $user_id)->get();
    $a = 0;
    $posts = array();

    foreach($favourites as $favourite):
        array_push($posts, Post::find($favourite->post_id));
    endforeach;

    return view('favourites')->with('posts', $posts); 
}
/*******************************************************/

/**********Add to favourites************/
public function favourite_store(Request $request){
    
    $post_id = $request->post_id;
    $user_id = Auth::id();

    $favourite = new Favourite;
    $favourite->user_id = $user_id;
    $favourite->post_id = $post_id;
    $favourite->save();

    return redirect()->back();
}
/*******************************************************/

/**********Delete favourite************/
public function favourite_delete(Request $request){

    $post_id = $request->post_id;
    $user_id = Auth::id();

    $favourite = Favourite::where('user_id', $user_id)->where('post_id', $post_id)->first();
    $favourite->delete();

    return redirect()->back();
}
/*******************************************************/

/**********Logged in User Pofile and Products************/
    public function profile(){
        
        $id = Auth::id();        
        $posts = Post::where('user_id', $id)->get();

        return view('profile')->with('posts',$posts);
    }
/*******************************************************/

/**********Logged in User Pofile and Products************/
public function profile_edit(){
        
    $id = Auth::id();        
    $user = User::find($id);

    return view('profile_edit')->with('user',$user);
}
/*******************************************************/

/**********Logged in User Pofile and Products************/
public function profile_update(Request $request){
    
    $id = Auth::id();
    $user = User::find($id);

    $user->name = $request->name;
    $user->save();
    return redirect()->route('profile');
}
/*******************************************************/

    public function search(Request $request){

        $query = $request['query'];
        $category_query = $request['category'];
        $location_query = $request['location'];
        //$posts = Post::where('title','LIKE','%'.$query.'%')->get();

        if( ($category_query == '0') && ($location_query == '0') ){
            $posts = Post::where('title','LIKE','%'.$query.'%')->get();

            if($posts){
                $categories_id = array();
                foreach($posts as $post):
                    if(!in_array($post->category_id, $categories_id)){
                        array_push($categories_id, $post->category_id);
                    }
                endforeach;
                
                $categories = array();
                foreach($categories_id as $category_id):
                    array_push($categories, Category::find($category_id));
                endforeach;
            
                $locations_id = array();
                foreach($posts as $post):
                    if(!in_array($post->location_id, $locations_id)){
                        array_push($locations_id, $post->location_id);
                    }
                endforeach;
                
                $locations = array();
                foreach($locations_id as $location_id):
                    array_push($locations, Location::find($location_id));
                endforeach;
            }
        
            return view('index')->with('posts', $posts)
                             ->with('categories', $categories)
                             ->with('locations', $locations)
                             ->with('query', $query);
        }

        if( ($category_query != '0') && ($location_query == '0') ){
            $posts = Post::where('category_id', $category_query)
                         ->where('title','LIKE','%'.$query.'%')->get();

            if($posts){
                $categories_id = array();
                foreach($posts as $post):
                    if(!in_array($post->category_id, $categories_id)){
                        array_push($categories_id, $post->category_id);
                    }
                endforeach;
                
                $categories = array();
                foreach($categories_id as $category_id):
                    array_push($categories, Category::find($category_id));
                endforeach;
            
                $locations_id = array();
                foreach($posts as $post):
                    if(!in_array($post->location_id, $locations_id)){
                        array_push($locations_id, $post->location_id);
                    }
                endforeach;
                
                $locations = array();
                foreach($locations_id as $location_id):
                    array_push($locations, Location::find($location_id));
                endforeach;
            }
        
            return view('index')->with('posts', $posts)
                             ->with('categories', $categories)
                             ->with('locations', $locations)
                             ->with('query', $query);
        }

        if( ($category_query == '0') && ($location_query != '0') ){
            $posts = Post::where('location_id', $location_query)
                         ->where('title','LIKE','%'.$query.'%')->get();

            if($posts){
                $categories_id = array();
                foreach($posts as $post):
                    if(!in_array($post->category_id, $categories_id)){
                        array_push($categories_id, $post->category_id);
                    }
                endforeach;
                
                $categories = array();
                foreach($categories_id as $category_id):
                    array_push($categories, Category::find($category_id));
                endforeach;
            
                $locations_id = array();
                foreach($posts as $post):
                    if(!in_array($post->location_id, $locations_id)){
                        array_push($locations_id, $post->location_id);
                    }
                endforeach;
                
                $locations = array();
                foreach($locations_id as $location_id):
                    array_push($locations, Location::find($location_id));
                endforeach;
            }
        
            return view('index')->with('posts', $posts)
                             ->with('categories', $categories)
                             ->with('locations', $locations)
                             ->with('query', $query);
        }

        if( ($category_query != '0') && ($location_query != '0') ){
            $posts = Post::where('category_id', $category_query)
                         ->where('location_id', $location_query)
                         ->where('title','LIKE','%'.$query.'%')->get();

            if($posts){
                $categories_id = array();
                foreach($posts as $post):
                    if(!in_array($post->category_id, $categories_id)){
                        array_push($categories_id, $post->category_id);
                    }
                endforeach;
                
                $categories = array();
                foreach($categories_id as $category_id):
                    array_push($categories, Category::find($category_id));
                endforeach;
            
                $locations_id = array();
                foreach($posts as $post):
                    if(!in_array($post->location_id, $locations_id)){
                        array_push($locations_id, $post->location_id);
                    }
                endforeach;
                
                $locations = array();
                foreach($locations_id as $location_id):
                    array_push($locations, Location::find($location_id));
                endforeach;
            }
        
            return view('index')->with('posts', $posts)
                             ->with('categories', $categories)
                             ->with('locations', $locations)
                             ->with('query', $query);
        }

        
        
    }


public function about(){

    return view('about');

}

public function contact(){

    return view('contact');

}


    /*public function user($id){

        $user = User::find($id);
        $posts = Post::where('user', $user->name)->get();
        return view('user')->with('posts', $posts)
                               ->with('user', $user);

    }*/



}



/* if( (!empty($category_query)) && (empty($location_query)) ){
    $categories = Category::find($category_query);
    $posts = Posts::where('category_id', $category_query)
                  ->where('title','LIKE','%'.$query.'%');
    if($posts){
        $locations_id = array();
        foreach($posts as $post):
            if(!isset($locations_id[$post->location_id])){
                array_push($locations_id, $post->location_id);
            }
        endforeach;
        
        $locations = array();
        foreach($locations_id as $location_id):
            array_push($locations, Location::find($location_id));
        endforeach;
    }

    return view('search')->with('posts', $posts)
                     ->with('categories', $categories)
                     ->with('locations', $locations)
                     ->with('query', $query);
}

if( (empty($category_query)) && (!empty($location_query)) ){
    $locations = Location::find($location_query);
    $posts = Posts::where('location_id', $location_query)
                  ->where('title','LIKE','%'.$query.'%');
    if($posts){
        $categories_id = array();
        foreach($posts as $post):
            if(!isset($categories_id[$post->category_id])){
                array_push($categories_id, $post->category_id);
            }
        endforeach;
        
        $categories = array();
        foreach($categories_id as $category_id):
            array_push($categories, Category::find($category_id));
        endforeach;
    }

    return view('search')->with('posts', $posts)
                     ->with('categories', $categories)
                     ->with('locations', $locations)
                     ->with('query', $query);
}

if( (!empty($category_query)) && (!empty($location_query)) ){
    $categories = Category::find($category_query);
    $locations = Location::find($location_query);
    $posts = Posts::where('category_id', $category_query)
                  ->where('location_id', $location_query)
                  ->where('title','LIKE','%'.$query.'%');

    return view('search')->with('posts', $posts)
                     ->with('categories', $categories)
                     ->with('locations', $locations)
                     ->with('query', $query);
}

if($posts){
    $categories_id = array();
    foreach($posts as $post):
        if(!isset($categories_id[$post->category_id])){
            array_push($categories_id, $post->category_id);
        }
    endforeach;
    
    $categories = array();
    foreach($categories_id as $category_id):
        array_push($categories, Category::find($category_id));
    endforeach;

    $locations_id = array();
    foreach($posts as $post):
        if(!isset($locations_id[$post->location_id])){
            array_push($locations_id, $post->location_id);
        }
    endforeach;
    
    $locations = array();
    foreach($locations_id as $location_id):
        array_push($locations, Location::find($location_id));
    endforeach;
}

return view('search')->with('posts', $posts)
                     ->with('categories', $categories)
                     ->with('locations', $locations)
                     ->with('query', $query); */


/* if( ($category_query != NULL) && ($location_query === NULL) ){
$categories = array();
$posts = array();

foreach($categories_query as $category_id):
    array_push($categories, Category::find($category_id));
endforeach;
foreach($categories as $category):
    array_push($posts, Post::where('category_id', $category->id)
                            ->where('title','LIKE','%'.$query.'%')->get());
endforeach;

if($posts){
    $locations_id = array();
    foreach($posts as $post):
        if(!isset($locations_id[$post->location_id])){
            array_push($locations_id, $post->location_id);
        }
    endforeach;
    
    $locations = array();
    foreach($locations_id as $location_id):
        array_push($locations, Location::find($location_id));
    endforeach;
}

return view('index')->with('posts', $posts)
                    ->with('categories', $categories)
                    ->with('locations', $locations)
                    ->with('query', $query);
}

if( ($category_query === NULL) && ($location_query != NULL) ){
$locations = array();
$posts = array();
foreach($locations_query as $location_id):
    array_push($locations, Location::find($location_id));
endforeach;
foreach($locations as $location):
    array_push($posts, Post::where('location_id', $location->id)
                            ->where('title','LIKE','%'.$query.'%')->get());
endforeach;
if($posts){
    $categories_id = array();
    foreach($posts as $post):
        if(!isset($categories_id[$post->category_id])){
            array_push($categories_id, $post->category_id);
        }
    endforeach;
    
    $categories = array();
    foreach($categories_id as $category_id):
        array_push($categories, Category::find($category_id));
    endforeach;
}

return view('index')->with('posts', $posts)
                    ->with('categories', $categories)
                    ->with('locations', $locations)
                    ->with('query', $query);
}

if( ($category_query != NULL) && ($location_query != NULL) ){
$categories = array();
$locations = array();
$posts_category = array();
$posts_location = array();

foreach($categories_query as $category_id):
    array_push($categories, Category::find($category_id));
endforeach;
foreach($categories as $category):
    array_push($posts, Post::where('category_id', $category->id)
                            ->where('title','LIKE','%'.$query.'%')->get());
endforeach;

if($posts){
    foreach($locations_query as $location_id):
        array_push($locations, Location::find($location_id));
    endforeach;
    foreach($locations as $location):
        foreach($posts as $post):
            if($post->location_id === $location->id){
                array_push($posts, $post);
            }else{
                unset($posts[$post]);
            }
        endforeach;
    endforeach;
}

return view('index')->with('posts', $posts)
                    ->with('categories', $categories)
                    ->with('locations', $locations)
                    ->with('query', $query);
} */