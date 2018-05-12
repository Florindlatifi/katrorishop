<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/login/facebook', 'Auth\LoginController@redirectToProviderFacebook')->name('facebook_login');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');

Route::get('/login/google', 'Auth\LoginController@redirectToProviderGoogle')->name('google_login');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');

/***************Home Page*****************/
Route::get('/', [
    'uses' => 'BaseController@index',
    'as' => 'index'
]);
/**************************************** */

/***************Product Details***************/
    Route::get('/product-{id}', [
        'uses' => 'BaseController@product',            
        'as' => 'product'
    ]);
/*********************************************/

/***************Products by user***************/
Route::get('/user-{id}', [
    'uses' => 'BaseController@user',
    'as' => 'user'
]);
/*********************************************/

/***************Products by category***************/
    Route::get('/category-{id}', [
        'uses' => 'BaseController@category',
        'as' => 'category'
    ]);
/*********************************************/

/***************Products by category***************/
Route::get('/location-{id}', [
    'uses' => 'BaseController@location',
    'as' => 'location'
]);
/*********************************************/

/***************Search***************/
Route::get('/search', [
    'uses' => 'BaseController@search',
    'as' => 'search'
]);
/*********************************************/

/***************Products by user***************/
Route::get('/about', [
    'uses' => 'BaseController@about',
    'as' => 'about'
]);
/*********************************************/

/***************Products by user***************/
Route::get('/contact', [
    'uses' => 'BaseController@contact',
    'as' => 'contact'
]);
/*********************************************/
    




/*******************************
 * 
 * Route to Upload in Cloudder
 * 
 *******************************/

/*******************Route group allowed only by the authenticated(logged in) user**************** */

Route::group([ 'middleware'=>'auth' ] ,function(){ 
    
/***************Add Product Form***************/
    Route::get('/create', [
        'uses' => 'BaseController@create',
        'as' => 'post.create'
    ]);
/*********************************************/

/***************Upload to database***************/
    Route::post('/store',[
        'uses' => 'BaseController@store',
        'as' => 'post.store'
    ]);
/*********************************************/

/***************Edit Product Form***************/
    Route::post('/edit',[
        'uses' => 'BaseController@edit',
        'as' => 'post.edit'
    ]);
/*********************************************/

/***************Update in database***************/
    Route::post('/update',[
        'uses' => 'BaseController@update',
        'as' => 'post.update'
    ]);
/*********************************************/

/***************Delete product***************/
    Route::post('/delete',[
        'uses' => 'BaseController@delete',
        'as' => 'post.delete'
    ]);
/*********************************************/

/**********Logged in User, Pofile and Products*******/
    Route::get('/profile', [
        'uses' => 'BaseController@profile',
        'as' => 'profile'
    ]);
/*********************************************/

/**********Logged in User, Pofile and Products*******/
Route::get('/edit-profile', [
    'uses' => 'BaseController@profile_edit',
    'as' => 'profile.edit'
]);
/*********************************************/

/**********Logged in User, Pofile and Products*******/
Route::post('/update-profile', [
    'uses' => 'BaseController@profile_update',
    'as' => 'profile.update'
]);
/*********************************************/

/******Logged in User, Pofile and Products******/
Route::get('/favourites', [
    'uses' => 'BaseController@favourites',
    'as' => 'favourites'
]);
/*********************************************/

/******Logged in User, Pofile and Products******/
Route::post('/favourite-store', [
    'uses' => 'BaseController@favourite_store',
    'as' => 'favourite.store'
]);
/*********************************************/

/******Logged in User, Pofile and Products******/
Route::post('/favourite-delete', [
    'uses' => 'BaseController@favourite_delete',
    'as' => 'favourite.delete'
]);
/*********************************************/

});
/*************************************End of route group*********************************** */

Route::get('/home', function(){

    return view('index');

})->name('index');


Route::get('/contact', function(){

    return view('contact');

})->name('contact');

Route::get('/seller-detail-1', function(){

    return view('seller-detail-1');

})->name('seller-detail-1');

Route::get('/my-profile', function(){

    return view('my-profile');

})->name('my-profile');

Route::get('/change-password', function(){

    return view('change-password');

})->name('change-password');

Route::get('/sign-in', function(){

    return view('sign-in');

})->name('sign-in');

Route::get('/register', function(){

    return view('register');

})->name('register');

Route::get('/submit', function(){

    return view('submit');

})->name('submit');

Route::get('/my-ads', function(){

    return view('my-ads');

})->name('my-ads');

 

/* Route::post('/user-post', [
     'uses' => 'PostController@viewUser',
     'as' => 'user-post'
 ]);*/

