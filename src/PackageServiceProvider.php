<?php

declare(strict_types=1);

namespace Filagora\Example;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/filagora-example.php', 'filagora-example');
    }

    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filagora-example');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filagora-example');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/filagora-example.php' => config_path('filagora-example.php'),
            ], 'filagora-example-config');

            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'filagora-example-migrations');
        }
    }
}
