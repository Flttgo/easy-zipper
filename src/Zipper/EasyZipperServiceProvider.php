<?php

namespace Zipper;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class EasyZipperServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('easy-zipper', function ($app) {
            $return = $app->make('Zipper\EasyZipper');

            return $return;
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('EasyZipper', 'Zipper\Facades\EasyZipperFacade');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['easy-zipper'];
    }
}
