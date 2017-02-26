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

//Pages
Route::get('/', 'PagesController@getIndex');
Route::get('rooms', 'PagesController@getRooms');
Route::get('restaurant', 'PagesController@getRestaurant');
Route::get('bar_and_terrace', 'PagesController@getBarAndTerrace');
Route::get('events', 'PagesController@getEvents');
Route::get('contact', 'PagesController@getContact');
Route::post('/contact/', 'PagesController@postContact');

//Localization
Route::get('/{locale}','LocalizationController@Index');
Route::get('/rooms/{locale}',['as' => 'rooms.locale', 'uses' => 'LocalizationController@Rooms']);
Route::get('/restaurant/{locale}',['as' => 'restaurant.locale', 'uses' => 'LocalizationController@Restaurant']);
Route::get('/bar_and_terrace/{locale}',['as' => 'bar_and_terrace.locale', 'uses' => 'LocalizationController@BarAndTerrace']);
Route::get('/events/{locale}',['as' => 'events.locale', 'uses' => 'LocalizationController@Events']);
Route::get('/contact/{locale}',['as' => 'contact.locale', 'uses' => 'LocalizationController@Contact']);
