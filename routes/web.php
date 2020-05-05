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

// Profile routes

Route::get('/profile/create', function () {
    return view('profile.create');
});

Route::get('/profile/own', function () {
    return view('profile.own');
});

Route::get('/profile/edit', function () {
    return view('profile.edit');
});

Route::get('/profile/{profile_id}', function () {
    return view('profile.show');
});

// Planner routes
Route::get('/planner', function () {
    return view('planner.show');
});

Route::get('/planner/overview', function () {
    return view('planner.index');
});

Route::get('/planner/create', function () {
    return view('planner.create');
});

Route::get('/planner/edit', function () {
    return view('planner.edit');
});

Route::get('/friends/add', function () {
    return view('friends.add');
});

Route::get('/todos/add', function () {
    return view('todos.add');
});

Route::get('/playlist/add', function () {
    return view('playlist.add');
});



// Auth routes

Route::get('/login', function () {
    return view('auth.login')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
