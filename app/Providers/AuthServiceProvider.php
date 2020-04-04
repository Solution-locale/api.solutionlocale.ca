<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Auth
        Gate::define('use-api', function ($user) {
            return $user->is_approved;
        });

        Gate::define('read-api', function ($user) {
            return $user->can_read;
        });

        Gate::define('write-api', function ($user) {
            return $user->can_write;
        });

        // API
        Passport::routes();
        Passport::tokensCan([
            'read' => 'Gives the read permission to the token.',
            'write' => 'Gives the write permission to the token.',
        ]);
        Passport::setDefaultScope([
            'read',
        ]);
    }
}
