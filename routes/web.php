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

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/home', 'HomeController@index')->name('home');

// Profile routes

Route::get('/profile', 'ProfileController@show')->name('profile.show')->middleware('auth');
Route::get('/profile/other', 'ProfileController@other')->name('profile.other')->middleware('auth');
Route::resource('/profile', 'ProfileController')->middleware('auth');

// Planner routes

Route::get('/planner/finished', 'PlannerController@finished')->name('planner.finished');
Route::resource('/planner', 'PlannerController')->middleware('auth');

// Friends routes

Route::get('/planner/{planner}/searchFriends', 'FriendController@searchFriends')->name('friends.search');
Route::get('/planner/{planner}/addFriends', 'FriendController@add')->name('friends.add');
Route::get('/planner/{planner}/editFriends', 'FriendController@edit')->name('friends.edit');

// Todos routes

Route::get('/planner/{planner}/addTodos', 'TodoController@add')->name('todos.add');
Route::get('/planner/{planner}/editTodos', 'TodoController@edit')->name('todos.edit');

// Artists routes

Route::get('/artists/search', 'ArtistController@search')->name('artist.search');


// Spotify routes

//// Auth
Route::get('/spotifyAuth', 'SpotifyController@authenticate')->name('spotifyAuth');
Route::get('/spoti', 'SpotifyController@callback')->name('spoti');

//// Playlists

Route::get('/planner/{planner}/searchPlaylist', 'SpotifyController@search')->name('playlist.search');
Route::get('/planner/{planner}/searchResultsPlaylist', 'SpotifyController@searchPlaylist')->name('searchResultsPlaylist');

//// Artists

Route::get('/artist/searchResultsArtist', 'SpotifyController@searchArtist')->name('searchResultsArtist');



// Route::get('planner/{planner}/addFriends/{crew}', function ($plannerId, $crewId) {
//     //
// });
