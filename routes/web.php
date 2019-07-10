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
Route::get('base', function () {
    return view('base');
});
Route::get('index', function () {
    return view('index');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('pricing', function () {
    return view('pricing');
});

Route::get('tour', function () {
    return view('pricing');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
Route::get('tour', function () {
    return view('tour');
});

Route::get('ss', function () {
    return view('ss');
});
Route::get('input', function () {
    return view('input');
});

Route::resource('data','Data');

Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Route::get('/gg', 'User@myform');