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

Route::get('/profile/create', 'ProfileController@create')->name('profile.create');
Route::get('/profile/own', 'ProfileController@own')->name('profile.own');
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::get('/profile/other', 'ProfileController@other')->name('profile.other');

// Route::get('/planner/edit', 'PlannerController@edit')->name('planner.edit');
// Route::post('/planner/create', 'PlannerController@store')->name('planner.store');
Route::get('/planner/finished', 'PlannerController@finished')->name('planner.finished');


Route::resource('/planner', 'PlannerController');

Route::get('/friends/add', 'FriendController@add')->name('friends.add');
Route::get('/friends/edit', 'FriendController@edit')->name('friends.edit');

Route::get('/todos/add', 'TodoController@add')->name('todos.add');
Route::get('/todos/edit', 'TodoController@edit')->name('todos.edit');

// Spotify API routes

Route::get('/playlist/add', 'PlaylistController@add')->name('playlist.add');
Route::get('/playlist/edit', 'PlaylistController@edit')->name('playlist.edit');

// Auth routes

Route::get('/login', function () {
    return view('auth.login')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth', 'SpotifyController@authenticate');
Route::get('/spoti', 'SpotifyController@callback');
Route::get('/spotifyData', 'SpotifyController@data');
