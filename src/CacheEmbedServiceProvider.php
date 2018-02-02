<?php

namespace Leewillis77\CachedEmbed;

use Illuminate\Support\ServiceProvider;

class CachedEmbedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/cachedembed.php' => config_path('cachedembed.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/cachedembed.php', 'cachedembed');
    }
}
