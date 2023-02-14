<?php

namespace Akane0151\TargetCrawler\Providers;

use Illuminate\Support\ServiceProvider;

class TargetCrawlerProvider extends ServiceProvider
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
