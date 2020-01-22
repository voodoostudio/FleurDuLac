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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localize' ] // Route translate middleware
    ],
    function(){

    Route::get('/', ['as' => 'home.locale', 'uses' => 'PagesController@getIndex']);
    Route::get('/rooms', ['as' => 'rooms.locale', 'uses' => 'PagesController@getRooms']);
//    Route::get('/restaurant', ['as' => 'restaurant.locale', 'uses' => 'PagesController@getRestaurant']);
    Route::get('/restaurant_closed', ['as' => 'restaurant_closed.locale', 'uses' => 'PagesController@getRestaurantClosed']);
    Route::get('/bar_and_terrace', ['as' => 'bar_and_terrace.locale', 'uses' => 'PagesController@getBarAndTerrace']);
    Route::get('/events', ['as' => 'events.locale', 'uses' => 'PagesController@getEvents']);
    Route::get('/contact', ['as' => 'contact.locale', 'uses' => 'PagesController@getContact']);
    Route::post('/contact', ['as' => 'contact.post','uses'=>'PagesController@postContact']);
    Route::get('/booking', ['as' => 'booking','uses'=>'PagesController@booking']);

});






