<?php

namespace LukeTrujillo\CircuitSimulator\Test;

use CircuitSimulator;

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
