<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SpotifyWebAPI;

class SpotifyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SpotifyWebAPI\Session::class, function ($app) {
            return new SpotifyWebAPI\Session(
                config('spotify.client_id'),
                config('spotify.client_secret'),
                url('/spoti')
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
