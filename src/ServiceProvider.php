<?php

namespace Szwtdl\Pay;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Pay::class, function () {
            return new Pay();
        });
        $this->app->alias(Pay::class, 'pay');
    }

    public function provides()
    {
        return [Pay::class, 'pay'];
    }
}