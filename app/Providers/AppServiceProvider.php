<?php

namespace App\Providers;

use App\Contracts\Reportable;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Likeable;
use App\Models\User;
use Illuminate\Auth\Access\Response;
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

        Gate::define('like', function (User $user, Likeable $likeable) {
            if (! $likeable->exists) {
                return Response::deny("Cannot like an object that doesn't exists");
            }

            if ($user->hasLiked($likeable)) {
                return Response::deny("Cannot like the same thing twice");
            }

            return Response::allow();
        });

        // $user->can('unlike', $post)
        Gate::define('unlike', function (User $user, Likeable $likeable) {
            if (! $likeable->exists) {
                return Response::deny("Cannot unlike an object that doesn't exists");
            }

            if (! $user->hasLiked($likeable)) {
                return Response::deny("Cannot unlike without liking first");
            }

            return Response::allow();
        });

        Gate::define('report', function (User $user, Reportable $reportable) {
            if (! $reportable->exists) {
                return Response::deny("Cannot report an object that doesn't exists");
            }

            if ($user->hasReported($reportable)) {
                return Response::deny("Cannot report the same thing twice");
            }

            return Response::allow();
        });
    }
}
