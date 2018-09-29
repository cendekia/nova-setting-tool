<?php

namespace Cendekia\SettingTool;

use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Cendekia\SettingTool\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'setting-tool');

        if (Schema::hasTable('settings')) {
            $this->loadViewsFrom(__DIR__.'/../resources/views/nova', 'nova');
        }

        $this->app->booted(function () {
            $this->routes();
        });
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/setting-tool')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'nova_setting');
    }

    /**
     * @return string
     */
    protected function configPath(): string
    {
        return __DIR__.'/../config/nova_setting.php';
    }
}
