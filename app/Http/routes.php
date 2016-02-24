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

Route::group(['middleware' => ['web', 'auth']], function () {

	Route::resource("activities", "ActivityController");
	Route::resource("news", "NewsController");
	
	Route::get('photos', function() { return View::make('uploads.basic')->with('api_token', Auth::user()->api_token);});

});

Route::group(['middleware' => ['auth:api']], function () {

	Route::get('api/basic', function(){ 
		return ''; 
	});
	Route::post('api/basic', function()
	{
	    // Grab our files input
	    $files = Input::file('files');
	    // We will store our uploads in public/uploads/basic
	    $assetPath = '/uploads/basic';
	    $uploadPath = public_path($assetPath);
	    // We need an empty arry for us to put the files back into
	    $results = array();

	    foreach ($files as $file) {
	    	$fileName = time().'-'.str_random(3).'-'.$file->getClientOriginalName();
	        // store our uploaded file in our uploads folder
	        $file->move($uploadPath, $fileName);
	        // set our results to have our asset path
	        $name = $assetPath . '/' . $fileName;
	        $results[] = compact('name');
	    }

	    // return our results in a files object
	    return array(
	        'files' => $results
	    );
	});

});


Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('api/activities', 'ActivityController@indexApi');
    Route::get('api/news', 'NewsController@indexApi');

});
