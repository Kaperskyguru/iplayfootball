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
    return view('index');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('players', function () {
    return view('profiles');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('resetpassword', function () {
    return view('resetpassword');
});

Route::get('about', function () {
    return view('about');
});


Route::post("contact", "PagesController@sendContact");
Route::get("/search", "SearchController@search");
Route::get("/players", "PlayersController@players");
Route::get("/profiles", "PlayersController@index");
