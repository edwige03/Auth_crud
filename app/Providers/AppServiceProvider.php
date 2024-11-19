<?php
namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Définir une Gate pour gérer les utilisateurs
        Gate::define('manage-users', function ($user) {
            return $user->role === 'superadmin';
        });
    }
}
