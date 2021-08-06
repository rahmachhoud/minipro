<?php

use Illuminate\Support\Facades\Route;

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
    return view('Home');
});


Route::get('/about', function () {
    return view('About');
});

Route::get('/fruit', function () {
    return view('Fruit');
});

Route::get('/vega', function () {
    return view('Vega');
});
