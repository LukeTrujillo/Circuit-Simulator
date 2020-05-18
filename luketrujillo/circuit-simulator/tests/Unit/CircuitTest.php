<?php
namespace LukeTrujillo\CircuitSimulatorPackage\Test;

use LukeTrujillo\CircuitSimulatorPackage\Circuit\Circuit;

class CircuitTest extends TestCase {

  /**
   * Ensure that this class exists, this will test the namespace too
   */
  public function testClassExists() {
    try {
        $item = new Circuit();
        $this->assertTrue(true);
    } catch (Exception $e) {
        $this->assertTrue(false);
    }
  }


  public function testBuildSimpleBlankCircuit() {
    $circuit = CircuitBuilder::make();

    $circuit->setBreadboard(Breadboard::make(20, 20));

    $wire = new Wire();

    $startCoordinate = BreadboardCoordinate::make('A12');
    $endCoordinate = BreadboardCoordinate::make("B13");

    $this->assertTrue($circuit->placeComponentAt($wire, 0, 0));


    $this->assertEquals($circuit->getComponentAt(0, 0));
  }

}
