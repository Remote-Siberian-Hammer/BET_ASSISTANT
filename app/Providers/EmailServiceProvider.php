<?php

namespace App\Providers;

use App\Domain\Service\EmailService;
use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Сервис с аккаунта
        $this->app->bind('App\Domain\Service\EmailService', function ($app) {
            return new EmailService();
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
