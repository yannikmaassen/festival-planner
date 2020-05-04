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
    return view('layouts/app');
});

Route::get('/profile/create', function () {
    return view('profile.create');
});

Route::get('/profile/own', function () {
    return view('profile.own');
});

Route::get('/planner/overview', function () {
    return view('planner.index');
});

Route::get('/login', function () {
    return view('auth.login')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
