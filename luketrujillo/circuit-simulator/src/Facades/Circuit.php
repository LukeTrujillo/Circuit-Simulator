<?php

namespace LukeTrujillo\CircuitSimulatorPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Circuit extends Facade {

  protected static function getFacadeAccessor() {
    return 'circuit';
  }

}
