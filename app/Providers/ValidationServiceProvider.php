<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\ValidationService;
use App\Domain\Service\RulesValidationService;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Сервис с аккаунта
        $this->app->bind('App\Domain\Service\ValidationService', function ($app) {
            return new ValidationService($this->app->make(
                RulesValidationService::class
            ));
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
