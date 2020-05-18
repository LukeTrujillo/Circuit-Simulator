<?php

namespace LukeTrujillo\CircuitSimulatorPackage\Test;

use LukeTrujillo\CircuitSimulatorPackage\CircuitSimulator;

class CircuitSimulatorTest extends TestCase {

  public function testClassExists() {
    try {
        $item = new CircuitSimulator();
        $this->assertTrue(true);
    } catch (Exception $e) {
        $this->assertTrue(false);
    }
  }

}
