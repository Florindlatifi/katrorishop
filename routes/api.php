<?php

use Illuminate\Http\Request;

use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*********** LOGIN AND REGISTER ***********/
Route::post('login', 'API\PassportController@login');
Route::post('register', 'API\PassportController@register');
/******************************************/

/************LOGGED IN USER DETAILS API ******************/
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('get-details', 'API\PassportController@getDetails');
});
/*********************************************************/

/*******************************
 * 
 * POST API ROUTES
 * 
 *******************************/

Route::get('posts', 'PostController@index');
 
Route::get('posts/{id}', 'PostController@show');

Route::post('posts', 'PostController@add');

Route::put('posts/{id}','PostController@update');

Route::delete('posts/{id}', 'PostController@delete');

/*******************************
 * 
 * LOCATION API ROUTES
 * 
 *******************************/

Route::get('locations', 'LocationController@index');
 
Route::get('locations/{id}', 'LocationController@show');

Route::post('locations', 'LocationController@add');

Route::put('locations/{id}','LocationController@update');

Route::delete('locations/{id}', 'LocationController@delete');

/*******************************
 * 
 * CATEGORIES API ROUTES
 * 
 *******************************/

Route::get('category', 'CategoryController@index');
 
Route::get('category/{id}', 'CategoryController@show');

Route::post('category', 'CategoryController@add');

Route::put('category/{id}','CategoryController@update');

Route::delete('category/{id}', 'CategoryController@delete');

/*******************************
 * 
 * USER API ROUTES
 * 
 *******************************/

Route::get('users', 'UserController@index');
 
Route::get('users/{id}', 'UserController@show');

Route::post('users', 'UserController@add');

Route::put('users/{id}','UserController@update');

Route::delete('users/{id}', 'UserController@delete');