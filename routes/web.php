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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/impressum', function () {
    return view('/impressum');
})->name('impressum');

// Profile routes

Route::resource('/profile', 'ProfileController')->middleware('auth');

// ProfileList routes

Route::get('/profile/{profile}/addProfileList', 'ProfileListController@add')->name('profile_list.add');
Route::get('/profile/{profile}/editProfileList', 'ProfileListController@edit')->name('profile_list.edit');

// Planner routes

Route::resource('/planner', 'PlannerController')->middleware('auth');

// Friends routes

Route::get('/planner/{planner}/searchFriends', 'FriendController@searchFriends')->name('friends.search');
Route::get('/planner/{planner}/addFriends', 'FriendController@add')->name('friends.add');

// Todos routes

Route::get('/planner/{planner}/addTodos', 'TodoController@add')->name('todos.add');
Route::get('/planner/{planner}/editTodos', 'TodoController@edit')->name('todos.edit');

// Artists routes

Route::get('/profile/{profile}/searchArtist', 'SpotifyController@search_artist')->name('artist.search');
Route::get('/profile/{profile}/searchResultsArtist', 'SpotifyController@searchArtist')->name('searchResultsArtist');

// Spotify routes

//// Auth
Route::get('/spotifyAuth', 'SpotifyController@authenticate')->name('spotifyAuth');
Route::get('/spoti', 'SpotifyController@callback')->name('spoti');

//// Playlists

Route::get('/planner/{planner}/searchPlaylist', 'SpotifyController@search')->name('playlist.search');
Route::get('/planner/{planner}/searchResultsPlaylist', 'SpotifyController@searchPlaylist')->name('searchResultsPlaylist');
