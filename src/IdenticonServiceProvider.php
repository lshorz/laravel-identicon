<?php
namespace Lshorz\LaravelIdenticon;

use Lshorz\LaravelIdenticon\Identicon;
use Illuminate\Support\ServiceProvider;

class IdenticonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Identicon', function($app){
            return new Identicon();
        });
    }
}
