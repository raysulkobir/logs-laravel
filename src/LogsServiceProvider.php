<?php

namespace Raysulkobir\LogsLaravel;

use Illuminate\Support\ServiceProvider;
use Raysulkobir\LogsLaravel\Helpers\Helpers;

class LogsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'LogsService');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->app->bind('helpers', function ($app) {
            return new Helpers();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->publishes([
            __DIR__ . '../config/config.php' => config_path('LogsService.php'),
        ], 'config');

        if (!class_exists('createAttandancesTable')) {
            $this->publishes([
                __DIR__ . '../database/migrations/create_logs_table.php.stub' => database_path('migrations/2024_03_23_101852_create_logs_table.php'),
            ], 'migrations');
        }
    }
}
