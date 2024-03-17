<?php

namespace Boykioyb\LaravelPageBuilder;

use Illuminate\Support\ServiceProvider;

class BuilderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->registerHelpers();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->publishes([
            __DIR__.'/../dist' => public_path('assets')
        ], 'assets');
//        if (Schema::hasTable(config('pagebuilder.storage.database.prefix').'settings')) {
//            if ($this->app->runningInConsole()) {
//                $this->commands([
//                    CreateTheme::class,
//                    PublishTheme::class,
//                    PublishDemo::class,
//                ]);
//            } elseif (empty(config('pagebuilder'))) {
//                throw new Exception("No PHPageBuilder config found, please run: php artisan vendor:publish --provider=\"Boykioyb\LaravelPageBuilder\ServiceProvider\" --tag=config");
//            }
//
//            // register singleton phpPageBuilder (this ensures phpb_ helpers have the right config without first manually creating a PHPageBuilder instance)
//            $this->app->singleton('phpPageBuilder', function($app) {
//                return new PHPageBuilder(config('pagebuilder') ?? []);
//            });
//            $this->app->make('phpPageBuilder');
//
//            $this->publishes([
//                __DIR__ . '/../config/pagebuilder.php' => config_path('pagebuilder.php'),
//            ], 'config');
//            $this->publishes([
//                __DIR__ . '/../themes/demo' => base_path(config('pagebuilder.theme.folder_url') . '/demo'),
//            ], 'demo-theme');
//        }
    }

    private function registerHelpers(): void
    {
        $helpers = __DIR__ . '/PageBuilder/Core/helpers.php';
        if (file_exists($helpers)) {
            require $helpers;
        }
    }
}
