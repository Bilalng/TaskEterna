<?php

namespace App\Providers;

use App\Interface\OrderInterface;
use Illuminate\Support\ServiceProvider;
use App\Interface\ProductInterface;
use App\Interface\UserInterface;
use App\Service\ProductService;
use App\Service\UserService;
use App\Service\OrderService;

class InterfaceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    
    public function register(): void
    {
        $this->app->singleton(UserInterface::class, UserService::class);
        $this->app->singleton(ProductInterface::class, ProductService::class);
        $this->app->singleton(OrderInterface::class, OrderService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
