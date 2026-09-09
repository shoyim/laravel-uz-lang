<?php

namespace LaravelUzLang;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Path to the package's translation files.
     *
     * @var string
     */
    protected $langPath = __DIR__.'/../lang';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $target = method_exists($this->app, 'langPath')
                ? $this->app->langPath()
                : $this->app->resourcePath('lang');

            $this->publishes([
                $this->langPath => $target,
            ], ['lang', 'laravel-uz-lang']);
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
