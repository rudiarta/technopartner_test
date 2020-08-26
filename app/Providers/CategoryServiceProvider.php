<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Category Service
        $this->app->bind(
            'App\Services\Category\CategoryAdapter',
            'App\Services\Category\CategoryService'
        );
        //Category Repository
        $this->app->bind(
            'App\Repository\Category\CategoryAdapter',
            'App\Repository\Category\CategoryRepository'
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
