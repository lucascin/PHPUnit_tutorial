<?php

use PHPUnit\Framework\TestCase;
require_once 'src/Calculator.php';

class CalculatorTest extends TestCase {

    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    /**
     * @covers Calculator::add
     */

    public function testAddition() {        
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    /**
     * @covers Calculator::subtract
     */

    public function testSubtraction() {        
        $result = $this->calculator->subtract(5, 2);
        $this->assertEquals(3, $result);
    }

    /**
     * @covers Calculator::multiplicate
     */

    public function testMultiplication(){
        $result = $this->calculator->multiplicate(5, 2);
        $this->assertEquals(10, $result);
    }

    /**
     * @covers Calculator::divide
     */

    public function testDivision(){
        $result = $this->calculator->divide(6, 3);
        $this->assertEquals(2, $result);
    }

    /**
     * @covers Calculator::divide
     */

     public function testZeroDivision(){
        $result = strval($this->calculator->divide(10, 0));
        $this->assertEquals("Division by 0 is not allowed", $result);
     }
}

?>