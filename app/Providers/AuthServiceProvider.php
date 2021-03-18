<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Gate::define('admin-users',function($user){
            return $user->hasRole('admin');
        });

        Gate::define('main-users',function($user){
            return $user->hasRole('main');
        });

        Gate::define('pri-users',function($user){
            return $user->hasRole('pri_user');
        });

        Gate::define('admin-main',function($user){
            return $user->hasAnyRoles(['admin','main']);
        });

        //
    }
}
