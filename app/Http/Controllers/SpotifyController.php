<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SpotifyWebAPI;
use App\Planner;
use App\Profile;
use Illuminate\Support\Facades\Redirect;
use SpotifyWebAPI\SpotifyWebAPI as SpotifyWebAPISpotifyWebAPI;

class SpotifyController extends Controller

{
    public function authenticate(SpotifyWebAPI\Session $session)
    {
        $options = [
            'scope' => [
                'user-read-email',
                'playlist-read-private',
                'playlist-read-collaborative',
            ],
            'auto-refresh' => true,
        ];

        return redirect($session->getAuthorizeUrl($options));
    }

    public function callback(SpotifyWebAPI\Session $session, SpotifyWebAPISpotifyWebAPI $api)
    {
        try {
            $session->requestAccessToken(request()->input('code'));
            $accessToken = $session->getAccessToken();
            $refreshToken = $session->getRefreshToken();

            session(['access_token' => $accessToken]);
            session(['refresh_token' => $refreshToken]);
            $this->getToken($api);
        } catch (\Exception $e) {
            return redirect()->route('planner.index');
        }

        return redirect()->route('planner.index');
    }

    public function search(Planner $planner)
    {
        return view('playlist.search', [
            'currentPlanner' => $planner
        ]);
    }

    private function getToken($api)
    {
        $api->setAccessToken(session()->get('access_token'));

        return $api;
    }

    public function searchPlaylist(SpotifyWebAPI\SpotifyWebAPI $api, Planner $planner)
    {
        $query = request()->input('q');
        $api->setAccessToken(session()->get('access_token'));

        if ($query === null) {
            session()->flash('empty', 'Biite gib einen Suchbegriff ein');
            return Redirect::back();
        }

        session(['query' => $query]);

        try {
            $this->getToken($api);
            $results = $api->search($query, 'playlist');
            $playlists = $results->playlists->items;
        } catch (\Exception $e) {
            return redirect()->route('spotifyAuth');
        }

        return view('playlist.searchResultsPlaylist', [
            'playlists' => $playlists,
            'query' => $query,
            'currentPlanner' => $planner
        ]);
    }

    public function search_artist(Profile $profile)
    {
        return view('artist.search', [
            'profile' => $profile
        ]);
    }

    public function searchArtist(SpotifyWebAPI\SpotifyWebAPI $api, Profile $profile)
    {
        $query = request()->input('q_artist');
        $api->setAccessToken(session()->get('access_token'));

        if ($query === null) {
            session()->flash('empty', 'Biite gib einen Suchbegriff ein');
            return Redirect::back();
        }

        session(['query' => $query]);

        try {
            $this->getToken($api);
            $results = $api->search($query, 'artist');
            $artists = $results->artists->items;
        } catch (\Exception $e) {
            return redirect()->route('spotifyAuth');
        }

        return view('artist.searchResultsArtist', [
            'artists' => $artists,
            'query' => $query,
            'profile' => $profile
        ]);
    }
}
