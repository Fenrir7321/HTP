<?php

namespace App\Providers;

use App\Services\AdminAuthManagerInterface;
use App\Services\ArrayMenuService;
use App\Services\CookieAdminAuthManager;
use App\Services\MenuServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register the menu service.
     */
    private function registerMenuService(): void
    {
        $this->app->singleton(MenuServiceInterface::class, fn() => new ArrayMenuService());
    }

    /**
     * Register the admin authentication manager service.
     */
    private function registerAdminAuthManagerService(): void
    {
        $this->app->bind(AdminAuthManagerInterface::class, CookieAdminAuthManager::class);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerMenuService();
        $this->registerAdminAuthManagerService();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}