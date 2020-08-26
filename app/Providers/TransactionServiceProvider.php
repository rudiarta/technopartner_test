<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TransactionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Transaction Service
        $this->app->bind(
            'App\Services\Transaction\TransactionAdapter',
            'App\Services\Transaction\TransactionService'
        );
        //Transaction Repository
        $this->app->bind(
            'App\Repository\Transaction\TransactionAdapter',
            'App\Repository\Transaction\TransactionRepository'
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
