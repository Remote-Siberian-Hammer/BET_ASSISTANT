<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\LeagueListService;

class LeagueListApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Domain\Service\LeagueListService', function ($app) {
            return new LeagueListService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
