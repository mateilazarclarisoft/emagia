<?php

use PHPUnit\Framework\TestCase;
use Emagia\Hero;

final class GameTest extends TestCase
{
    public function testGame(): void
    {
        $hero = new Hero("Ordeus");
        $this->assertTrue($hero->GetName()=="Ordeus");
        $this->assertGreaterThan(70,$hero->GetHealth(),"Health bellow expected 70 for hero");
        $this->assertLessThan(100,$hero->GetHealth(),"Health outside expected 100 for hero");
    }
}