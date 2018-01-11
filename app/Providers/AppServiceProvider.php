<?php

namespace Laracoin\Providers;

use Illuminate\{
    Support\Facades\Schema, Support\ServiceProvider
};
use App\{
    Repositories\InterfaceRepositories, Repositories\UserProfileRepository
};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InterfaceRepositories::class, UserProfileRepository::class);
    }
}
