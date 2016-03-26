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

Route::group(['middleware' => ['web']], function () {

    # route for the index page.
    Route::get('/', function() {
      return view('index');
    });

    # route for the lorem ipsum page (display the form via GET method)
    Route::get('/lorem-ipsum', 'LoremIpsumController@getShowForm');

    # route for the lorem ipsum page(to process the form via POST method)
    Route::post('/lorem-ipsum', 'LoremIpsumController@postProcessForm');

    # route for the random user page (display the form via GET method)
    Route::get('/random-user', 'RandomUserController@getShowForm');

    # route for the random user page(to process the form via POST method)
    Route::post('/random-user', 'RandomUserController@postProcessForm');

});
