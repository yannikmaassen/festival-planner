<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SpotifyWebAPI;

class SpotifyController extends Controller

{
    public function authenticate(SpotifyWebAPI\Session $session)
    {
        $options = [
            'scope' => [
                'playlist-read-private',
                'user-read-private',
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

        return redirect('spotifyData');
    }

    //test query

    public function data(SpotifyWebAPI\SpotifyWebAPI $api)
    {
        $api->setAccessToken(session()->get('access_token'));
        return [
            $api->getTrack('11dFghVXANMlKmJXsNCbNl'),
            $api->me()
        ];
    }

    // public function requestAccessToken()
    // {
    //     $session->requestAccessToken($_GET['code']);

    //     $accessToken = $session->getAccessToken();
    //     $refreshToken = $session->getRefreshToken();
    // }
}
