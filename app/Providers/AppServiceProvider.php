<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('is_Admin', function(User $user) {
            return $user->role === 'admin';
        });
    }
}
