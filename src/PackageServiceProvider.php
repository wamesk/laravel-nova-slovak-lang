<?php

namespace Wame\LaravelNovaSlovakLang;

use Illuminate\Support\ServiceProvider;
use Wame\LaravelNovaSlovakLang\Utils\Helpers;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole() && !$this->app->environment('production')) {
            $this->publishes([__DIR__ . '/../resources/lang/' => resource_path('lang')]);
//            Helpers::copyDir(__DIR__ . '/../resources/lang/', resource_path('lang'));

            $this->loadJSONTranslationsFrom(resource_path('lang'));
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
