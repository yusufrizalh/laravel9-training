<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        // role admin
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });

        // role manager
        Gate::define('isManager', function ($user) {
            return $user->role == 'manager';
        });

        // role user
        Gate::define('isUser', function ($user) {
            return $user->role == 'user';
        });
    }
}
