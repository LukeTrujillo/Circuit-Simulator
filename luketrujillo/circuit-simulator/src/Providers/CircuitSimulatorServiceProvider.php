<?php

namespace LukeTrujillo\CircuitSimulatorPackage\Providers;

use Illuminate\Support\ServiceProvider;
use LukeTrujillo\CircuitSimulator\Circuit\Circuit;

class CircuitSimulatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('circuitsimulator', 'CircuitSimulator');

        $this->app->singleton('circuit', function($app) {
          return new Circuit();
        });
    }
}
