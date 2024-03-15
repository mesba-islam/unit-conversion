<?php

namespace Mesba\UnitConversion\Tests;

use PHPUnit\Framework\TestCase;
use Mesba\UnitConversion\Weight;

class WeightTest extends TestCase
{
    public function testConversionFromKilogramsToPounds()
    {
        $lbs = Weight::fromKilograms(100)->tolbs();

        $this->assertEquals(220.4623, $lbs);
    }

}
