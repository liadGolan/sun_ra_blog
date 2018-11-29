<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ReplyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\ReplyContract',
            'App\Services\ReplyService'
        );
    }
}
