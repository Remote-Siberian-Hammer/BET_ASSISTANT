<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Service\UserService;
use App\Repository\UserRepository;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Сервис с аккаунта
        $this->app->bind('App\Domain\Service\UserService', function ($app) {
            return new UserService();
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
