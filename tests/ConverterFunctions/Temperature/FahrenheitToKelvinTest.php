<?php

namespace Nscps\Functions\Tests\ConverterFunctions\Temperature;

use InvalidArgumentException;
use function Nscps\Functions\ConverterFunctions\Temperature\fahrenheit_to_kelvin;

class FahrenheitToKelvinTest extends TemperatureTestCase
{

    public function validTemperatureDataProvider(): array
    {
        $numbers = [];

        // Min
        $numbers[] = [-459.67, 0.0];

        // Int
        $numbers[] = [32, 273.15];
        $numbers[] = [70, 294.26];
        $numbers[] = [70, 294.261, 3];
        $numbers[] = [98.6, 310.15];
        $numbers[] = [212, 373.15];

        // Numeric string
        $numbers[] = ['163.202', 346.04];

        return $numbers;
    }

    /**
     * @test
     * @dataProvider invalidFahrenheitDataProvider
     */
    public function shouldThrowExceptionWhenTemperatureIsInvalid($invalid_temperature): void
    {
        $this->expectException(InvalidArgumentException::class);

        fahrenheit_to_kelvin($invalid_temperature);
    }

    /**
     * @test
     * @dataProvider validTemperatureDataProvider
     */
    public function shouldConvertWhenTemperatureIsValid($fahrenheit, $kelvin, int $precision = 2): void
    {
        $this->assertSame($kelvin, fahrenheit_to_kelvin($fahrenheit, $precision));
    }

}