<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\UserInterface;
use App\Service\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    $this->app->bind(UserInterface::class, UserService::class);        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
