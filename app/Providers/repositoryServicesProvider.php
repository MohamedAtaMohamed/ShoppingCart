<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class repositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\ShoppingCartRepositoryInterface',
            'App\Http\Repositories\ShoppingCartRepository'
        );


        $this->app->bind(
            'App\Http\Interfaces\ProductRepositoryInterface',
            'App\Http\Repositories\ProductRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Api\ProductRepositoryInterface',
            'App\Http\Repositories\Api\ProductRepository'
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
