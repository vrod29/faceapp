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

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('uploads', function () {
    return view('uploads');
});

Route::get('settings', function () {
    return view('settings');
});

Route::get('results', function () {
    return view('results');
});

Route::get('directory', function () {
    return view('directory');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/getFaceAppResults', 'FaceController@getFaceAppResults');
