<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Services\Role\RoleServiceInterface::class, \App\Services\Role\RoleService::class);
        $this->app->bind(\App\Services\Authunticate\AuthServiceInterface::class, \App\Services\Authunticate\AuthService::class);
        $this->app->bind(\App\Services\User\UserServiceInterface::class, \App\Services\User\UserService::class);
        $this->app->bind(\App\Services\Option\OptionServiceInterface::class, \App\Services\Option\OptionService::class);
        $this->app->bind(\App\Services\View\ViewServiceInterface::class, \App\Services\View\ViewService::class);
        //:end-bindings:
    }
}
