<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/','HomeController@searchFunction');

Route::post('results','HomeController@showResults');

Route::get('propertyResult', 'HomeController@propertyResult');


// login
Route::get('login', function(){
return View::make('login');
});

Route::post('login', 'HomeController@login');

// Register
Route::get('register', function(){
return View::make('register');
});

Route::post('register', 'HomeController@register');




// Route::get('about/directions', function(){
// 	return'Directions content goes here';
// });

// Route::get('about/{theSubject}', function($theSubject){
// 	return $theSubject.' content goes here';
// });

// Route::get('about/classes/{theSubject}', function($theSubject){
// 	return "Content about {$theSubject} classes goes here";
// });

// Route::get('signup', function(){
// 	return View::make('signup');
// });



// Route::post('thanks', function(){
// 	$theEmail = Input::get('email');
// 	return View::make('thanks')->with('theEmail', $theEmail);
// });