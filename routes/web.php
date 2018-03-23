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

Route::get('/', 'HomeController@homepage');

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/uploads', function () {
    return view('uploads');
});

Route::get('settings', 'UserController@userSettings');

Route::get('/results', function () {
    return view('results');
});

Route::get('/directory', 'UserController@fillDirectory');


Route::post('/updateSettings', 'UserController@updateSettings');

Auth::routes();

Route::post('/getFaceAppResults', 'FaceController@getFaceAppResults');

Route::get('logout', 'HomeController@logout');
