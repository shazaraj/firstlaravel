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

Route::get('/', function () {
    return view('landing');
});


    Route::get('/about', function () {return view('about');});


    Route::get('/contact', function () {return view('contact');});

    Route::get('/home', function () {return view('home');});

    Route::get('/landing', function () {return view('landing');});

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Auth::routes(["verify"=>true]);

    //login with facebook

        Route::get('/redirect/{service}','SocialController@redirect');

        Route::get('/callback/{service}','SocialController@callback');

    Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');


    Route::get('offersService','CrudController@offers');


    Route::group(['prefix'=>'offers'],function (){

        Route::get('create','CrudController@create');

        Route::post('store','CrudController@store') -> name('offers.store');


        Route::get('edit/{offer_id}', 'CrudController@edit');

        Route::post('update/{offer_id}', 'CrudController@update')->name('offers.update');

        Route::get('delete/{offer_id}', 'CrudController@delete')->name('offers.delete');

        Route::get('data','CrudController@getOffers')->name('offers.data');


    });

    Route::get('video','CrudController@getVideo')->middleware('auth');


    ################################### ajax start

Route::group(['prefix' => 'ajaxoffers'],function (){

    Route::post('create','OfferController@create');

    Route::post('store','OfferController@store')->name('ajax.offer.store');

    Route::post('data','OfferController@getdata');
});

    ################################## end ajax

########################### middleware
Route::group(['middleware' => 'CheckAge'] ,function (){

    Route::get('adult','Auth\CustomAuthController@adult')->name('adult');

});

Route::get('site','Auth\CustomAuthController@site')->name('site');
Route::get('admin','Auth\CustomAuthController@admin')->middleware('auth:admin')->name('admin');

Route::get('admin/login','Auth\CustomAuthController@adminLogin')->name('admin.login');

Route::post('admin/login','Auth\CustomAuthController@checkAdminLogin')->name('save.admin.login');

########################### end auth
