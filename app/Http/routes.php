<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Files;


Route::group(['middleware' => ['web', 'auth']], function () {

	Route::resource("basics", "BasicController");
	Route::get('basic/edit', 'BasicController@edit');
	Route::resource("activities", "ActivityController");
	Route::resource("news", "NewsController");
	
	Route::get('photos/upload', 'FileController@upload');
	Route::get('photos', 'FileController@index');
	Route::delete('photos/destroy/{id}', 'FileController@destroy');
});

Route::group(['middleware' => ['auth:api']], function () {

	Route::post('api/photos', 'FileController@storeApi');

});


Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('/register', function () {
	    return view('errors/404');
	});
    Route::get('/home', 'HomeController@index');
    Route::get('api/basic', 'BasicController@indexApi');
    Route::get('api/activities', 'ActivityController@indexApi');
    Route::get('api/news', 'NewsController@indexApi');
   	Route::get('api/photos', 'FileController@indexApi');

   	Route::get('/', function () {
	    return view('clients/index');
	});
   	Route::get('/index.html', function () {
	    return view('clients/index');
	});
   	Route::get('/about.html', function () {
	    return view('clients/about');
	});
   	Route::get('/activities.html', function () {
	    return view('clients/activities');
	});
   	Route::get('/activity.html', function () {
	    return view('clients/activity');
	});
   	Route::get('/news.html', function () {
	    return view('clients/news');
	});
   	Route::get('/template.html', function () {
	    return view('clients/coming-soon');
	});

   	Route::get('/state1.html', function () {
	    return view('clients/state1');
	});
	Route::get('/state2.html', function () {
	    return view('clients/state2');
	});
	Route::get('/state3.html', function () {
	    return view('clients/state3');
	});

	Route::get('/photos.html', function () {
	    return view('clients/photos');
	});

});
