<?php

use App\Hippopotamus;
use PHPUnit\Framework\TestCase;

class HippopotamusTest extends TestCase
{
    public function testFight()
    {
        $hippo1 = new Hippopotamus("Hippo1", 1500, 30);
        $hippo2 = new Hippopotamus("Hippo2", 1600, 25);
        $winner = $hippo1->fight($hippo2);
        $this->assertEquals("Hippo1", $winner->getName());
    }

    public function testLifeCycle()
    {
        $hippo = new Hippopotamus("Hippo", 1000, 20);
        for ($i = 1; $i <= 15; $i++) {
            for ($j = 1; $j <= 2; $j++) {
                $hippo->eat();
            }
            for ($j = 1; $j <= 3; $j++) {
                $hippo->swim();
            }
            if ($i % 3 == 0) {
                $this->assertStringContainsString("Nom de l'hippo Hippo a perdu  -", (string)$hippo);
            }
        }
    }
}
