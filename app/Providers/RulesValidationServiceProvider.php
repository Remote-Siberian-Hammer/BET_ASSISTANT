<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\RulesValidationService;

class RulesValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Сервис с аккаунта
        $this->app->bind('App\Domain\Service\RulesValidationService', function ($app) {
            return new RulesValidationService();
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
