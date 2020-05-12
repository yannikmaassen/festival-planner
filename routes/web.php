<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
})->name('auth.login');

// Profile routes

Route::get('/profile/create', 'ProfileController@create')->name('profile.create');
Route::get('/profile/own', 'ProfileController@own')->name('profile.own');
Route::post('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::get('/profile/other', 'ProfileController@other')->name('profile.other');


// Route::get('/profile/create', function () {
//     return view('profile.create');
// })->name('profile.create');

// Route::get('/profile/own', function () {
//     return view('profile.own');
// })->name('profile.own');

// Route::get('/profile/edit', function () {
//     return view('profile.edit');
// })->name('profile.edit');

// Route::get('/profile/other', function () {
//     return view('profile.other');
// })->name('profile.other');

// Planner routes
Route::get('/planner', function () {
    return view('planner.show');
});

Route::get('/planner/finished', function () {
    return view('planner.show_finished');
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

Route::get('/friends/edit', function () {
    return view('friends.edit');
});

Route::get('/todos/add', function () {
    return view('todos.add');
});

Route::get('/todos/edit', function () {
    return view('todos.edit');
});

Route::get('/playlist/add', function () {
    return view('playlist.add');
});

Route::get('/playlist/edit', function () {
    return view('playlist.edit');
});

// Auth routes

Route::get('/login', function () {
    return view('auth.login')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
