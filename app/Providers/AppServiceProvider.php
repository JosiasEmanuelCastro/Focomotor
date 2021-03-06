<?php

namespace App\Providers;

use View;
use Agent;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(env('FORCE_HTTPS',false)) { // Default value should be false for local server
            URL::forceScheme('https');
        }

        Paginator::useBootstrap();

        $device = (Agent::isMobile() || Agent::isTablet()) ? 'mobile.' : '';

        View::share('device', $device);
    }
}
