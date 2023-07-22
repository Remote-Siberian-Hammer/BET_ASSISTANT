<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\LanguageService;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Сервис с выбора языка
        $this->app->bind('App\Domain\Service\LanguageService', function ($app) {
            return new LanguageService();
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
