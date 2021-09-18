<?php

namespace Sallmin\PhpPackage\Tests;

use PHPUnit\Framework\TestCase;
use Sallmin\PhpPackage\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $lbs = Temperature::forCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $lbs);
    }
}
