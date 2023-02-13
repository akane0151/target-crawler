<?php

namespace akane0151\targetCrawler\Providers;

use Illuminate\Support\ServiceProvider;

class targetCrawlerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //add my routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        //add my config
        $this->publishes([
            __DIR__.'/../config/targetCrawler.php' => config_path('targetCrawler.php'),
        ]);
    }
}
