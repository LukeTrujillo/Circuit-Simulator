<?php

namespace LukeTrujillo\CircuitSimulatorPackage\Test;

use LukeTrujillo\CircuitSimulatorPackage\Providers\CircuitSimulatorServiceProvider;
use LukeTrujillo\CircuitSimulatorPackage\CircuitSimulator;
use LukeTrujillo\CircuitSimulatorPackage\Circuit\Circuit;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase {

  /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return lasselehtinen\MyPackage\MyPackageServiceProvider
     */
    protected function getPackageProviders($app) {
        return [CircuitSimulatorServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'CircuitSimulator' => CircuitSimulator::class,
            'circuit' => Circuit::class
        ];
    }
}
