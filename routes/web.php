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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('landing');
});


//Route::get('index','AdminController@index');

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
    });

    Route::get('/landing', function () {
    return view('landing');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');
