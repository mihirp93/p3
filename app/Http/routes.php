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

    Route::get('/', function () {
        //return view('welcome');
        return("This is my index page!");
    });

    Route::get('/lorem-ipsum', function() {
        return("This page will show the lorem ipsum generator form(method will be GET).");
    });

    Route::post('/lorem-ipsum', function() {
        return("This page will show the desired number of paragraphs with lorem ipsum text(method will be POST).");
    });

    Route::get('/random-user-generator', function() {
        return("This page will show the random user generator form(method will be GET).");
    });

    Route::post('/random-user-generator', function() {
        return("This page will show randomly generated user(s)(method will be POST).");
    });

});
