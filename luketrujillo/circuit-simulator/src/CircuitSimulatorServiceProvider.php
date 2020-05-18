<?php

namespace LukeTrujillo\CircuitSimulator;

use Illuminate\Support\ServiceProvider;

/*
  Package imports here
 */
use CircuitSimulator;

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
        $this->app->singleton(CircuitSimulator::class, function () {
            return new CircuitSimulator();
        });

        $this->app->alias(CircuitSimulator::class, 'circuit-simulator');
    }
}
