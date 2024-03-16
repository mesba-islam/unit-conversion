<?php

namespace Mesba\UnitConversion\Tests;

use Mesba\UnitConversion\Temperature;
use PHPUnit\Framework\TestCase;

class TempTest extends TestCase
{
    public function testConversionFromTempToFr()
    {
        $fahrenheit = Temperature::fromCelsius(1)->toFr();

        $this->assertEquals(33.8, $fahrenheit);
    }
}
