<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function(User $user){
            return $user->name === 'MarketingUser' || $user->name === 'DendiRiki';
        });

        Gate::define('she', function(User $user){
            return $user->name === 'SHEUser' || $user->name === 'DendiRiki';
        });

        Gate::define('int', function(User $user){
            return $user->name === 'INTUser' || $user->name === 'DendiRiki';
        });


        Gate::define('personalia', function(User $user){
            return $user->name === 'PersonaliaUser' || $user->name === 'DendiRiki';
        });

        Gate::define('qualitycontrol', function(User $user){
            return $user->name === 'QualityControlUser' || $user->name === 'DendiRiki';
        });

        Gate::define('superuser', function(User $user){
            return $user->name === 'DendiRiki';
        });

        Gate::define('store', function(User $user){
            return $user->name === 'StoreUser' || $user->name === 'DendiRiki';
        });

        Paginator::useBootstrap();


    }
}
