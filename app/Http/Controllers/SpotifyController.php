<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SpotifyWebAPI;
use App\Planner;

class SpotifyController extends Controller

{
    public function authenticate(SpotifyWebAPI\Session $session)
    {
        $options = [
            'scope' => [
                'playlist-modify-public',
                'playlist-read-private',
                'playlist-modify-private',
                'user-read-email',
                'playlist-read-collaborative',
                'user-library-modify',
                'user-top-read',
            ],
            'auto-refresh' => true,
        ];

        return redirect($session->getAuthorizeUrl($options));
    }

    public function callback(SpotifyWebAPI\Session $session)
    {
        $session->requestAccessToken(request()->input('code'));
        $accessToken = $session->getAccessToken();
        $refreshToken = $session->getRefreshToken();

        session(['access_token' => $accessToken]);
        session(['refresh_token' => $refreshToken]);

        return redirect('planner');
    }

    public function search(Planner $planner)
    {
        return view('playlist.search', [
            'currentPlanner' => $planner
        ]);
    }

    public function searchPlaylist(SpotifyWebAPI\SpotifyWebAPI $api, Planner $planner)
    {
        $query = request()->input('q');
        $api->setAccessToken(session()->get('access_token'));

        $results = $api->search($query, 'playlist');
        $playlists = $results->playlists->items;

        return view('playlist.searchResultsPlaylist', [
            'playlists' => $playlists,
            'query' => $query,
            'currentPlanner' => $planner
        ]);
    }

    public function searchArtist(SpotifyWebAPI\SpotifyWebAPI $api)
    {
        $query = request()->input('q');
        $api->setAccessToken(session()->get('access_token'));

        $results = $api->search($query, 'artist');

        $artists = $results->artists->items;

        return view('artist.searchResultsArtist', [
            'artists' => $artists,
            'query' => $query
        ]);
    }

    // public function requestAccessToken()
    // {
    //     $session->requestAccessToken($_GET['code']);

    //     $accessToken = $session->getAccessToken();
    //     $refreshToken = $session->getRefreshToken();
    // }
}
