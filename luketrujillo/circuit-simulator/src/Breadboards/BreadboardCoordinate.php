<?php

namespace LukeTrujillo\CircuitSimulatorPackage\Breadboards;


class BreadboardCoordinate {

  private $xCoordinate, $yCoordinate;
  
  public __construct($xCoordinate, $yCoordinate) {
    $this->xCoordinate = $xCoordinate;
    $this->yCoordinate = $yCoordinate;
  }


  public static function make($xCoordinate, $yCoordinate) {

    if(is_numeric($xCoordinate) && is_numeric($yCoordinate) && $xCoordinate >= 0 && $yCoordinate >= 0) {
      return new BreadboardCoordinate($xCoordinate, $yCoordinate);
    }

    throw new Exception("BreadboardCoordinate::make({$stringCoordinate}) is not a valid Breadboard Coordinate.");

  }

}
