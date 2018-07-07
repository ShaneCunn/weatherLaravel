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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/demo', function () {

    return View::make('demo')->with('title', 'Simple weather page');
});

/*Route::get('/weather', function (){

    return View::make('weather.weather')->with('title', 'weather page');
});*/

Route::get('/weather', 'WeatherController@index')->name('weather');

Route::get('/location', 'WeatherController@location');

Route::get('/test', 'WeatherController@test');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('ip',function(){
    $ip= \Request::ip();

    $ip = '86.44.136.190';
    $data = \Location::get($ip);
    dd($data);
});