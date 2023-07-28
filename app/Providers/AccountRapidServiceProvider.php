<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\AccountRapidService;

class AccountRapidServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Domain\Service\AccountRapidService', function ($app) {
            return new AccountRapidService();
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
