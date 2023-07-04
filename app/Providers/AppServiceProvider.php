<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Policies\PostPolicy;
use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }


    public function registerPolicies()
    {
        Gate::policy(Post::class, PostPolicy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();
        $this->register();

        Gate::define('admin', function ($user) {
            return $user->hasRole('admin');
        });
    }
}






