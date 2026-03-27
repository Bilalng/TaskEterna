<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\UserInterface;
use App\Service\UserService;
use App\Interface\ProductInterface;
use App\Service\ProductService;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    $this->app->singleton(UserInterface::class, UserService::class);   
    $this->app->singleton(ProductInterface::class, ProductService::class);     
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
