<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
	return Redirect('/home');
});

Route::get('/home', "PagesController@home");
Route::get('/qualifications', "PagesController@qualifications");
Route::get('/pseudonymes', "PagesController@pseudonymes");
Route::get('/trivia', "PagesController@trivia");
Route::get('/whatvotingmeans', "PagesController@whatvotingmeans");
Route::get('/howtovote', "PagesController@howtovote");





Route::get('/test', function(){
	return "test";
});
