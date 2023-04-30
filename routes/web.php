<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.main');
});

Route::get('/category', function () {
    return view('dashboard.category');
});

Route::get('/mymovies', function () {
    return view('dashboard.themovie');
});

Route::get('/favorite', function () {
    return view('dashboard.themovie');
});

Route::get('/profile', function () {
    return view('dashboard.profile');
});