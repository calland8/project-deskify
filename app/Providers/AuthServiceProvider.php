<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // creating a gate to control access to parts of the system 
        // for a logged in user
        Gate::define('authorised', function ($user) {
            return $user;
        });

        //for an admin user role 
        Gate::define('isAdmin', function ($user) {
            return $user->checkRole('admin');
        });
    }
}
