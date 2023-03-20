<?php

namespace App;

use App\Calculatrice;
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    public function testAdd()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(4, $calculatrice->add(2, 2));
        $this->assertEquals(10, $calculatrice->add(5, 5));
    }

    public function testSubtract()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(2, $calculatrice->subtract(4, 2));
        $this->assertEquals(5, $calculatrice->subtract(10, 5));
    }

    public function testMul()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(8, $calculatrice->mul(2, 4));
        $this->assertEquals(20, $calculatrice->mul(4, 5));
    }

    public function testDiv()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(2, $calculatrice->div(4, 2));
    }
    public function testDivZero(){
        $calculatrice = new Calculatrice();
        $this->assertEquals("Division par zéro impossible", $calculatrice->div(4,0));
    }
}
