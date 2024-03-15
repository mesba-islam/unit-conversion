<?php

namespace Mesba\UnitConversion\Tests;

use Mesba\UnitConversion\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    public function testConversionFromKilogramsToPounds()
    {
        $lbs = Weight::fromKilograms(100)->tolbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
