<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BalanceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Balance Service
        $this->app->bind(
            'App\Services\Balance\BalanceAdapter',
            'App\Services\Balance\BalanceService'
        );
        //Balance Repository
        $this->app->bind(
            'App\Repository\Balance\BalanceAdapter',
            'App\Repository\Balance\BalanceRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
