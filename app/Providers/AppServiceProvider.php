<?php

namespace App\Providers;

use App\Models\Stone;
use App\Observers\StoneObserver;
use Illuminate\Support\ServiceProvider;

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
        Stone::observe(StoneObserver::class);
    }
}
