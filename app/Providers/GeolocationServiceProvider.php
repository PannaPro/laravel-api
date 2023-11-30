<?php

namespace App\Providers;

use App\Services\Satellite\Satellite;
use Illuminate\Support\ServiceProvider;
use App\Services\Geolocation\Geolocation;
use App\Services\Map\Map;

class GeolocationServiceProvider extends ServiceProvider
{
   // при обращение к классу Geolocation благодаря связыванию, будут автоматически созданы экземпляры переданных классов,
   // и их не потребуется созлавать в ручнную, что позволяет легче модифицировать код и легче тестировать
    public function register(): void
    {
        $this->app->bind(Geolocation::class, function($app) {
            $map = new Map();
            $satellite = new Satellite();

            return new Geolocation($map, $satellite);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
