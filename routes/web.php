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

Route::get('/planner/overview', 'PlannerController@index')->name('planner.overview');
Route::get('/planner/finished', 'PlannerController@finished')->name('planner.finished');
Route::get('/planner/{planner}', 'PlannerController@show')->name('planner.show');
Route::get('/planner/create', 'PlannerController@create')->name('planner.create');
Route::get('/planner/edit', 'PlannerController@edit')->name('planner.edit');

Route::get('/friends/add', 'FriendController@add')->name('friends.add');
Route::get('/friends/edit', 'FriendController@edit')->name('friends.edit');

Route::get('/todos/add', 'TodoController@add')->name('todos.add');
Route::get('/todos/edit', 'TodoController@edit')->name('todos.edit');

// Spotify API routes

Route::get('/playlist/add', 'PlaylistController@add')->name('playlist.add');
Route::get('/playlist/edit', 'PlaylistController@edit')->name('playlist.edit');

// Route::get('/playlist/add', function () {
//     return view('playlist.add')->name('playlist.add');
// });

// Route::get('/playlist/edit', function () {
//     return view('playlist.edit')->name('playlist.edit');
// });

// Auth routes

Route::get('/login', function () {
    return view('auth.login')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
