<?php

namespace Nscps\Functions\Tests\MathFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use function Nscps\Functions\MathFunctions\lcd;

class LcdTest extends CustomTestCase
{

    public function lcdDataProvider(): array
    {
        $numbers = [];

        $numbers[] = [1, 1, 1];
        $numbers[] = [1, 0, 1];
        $numbers[] = [0, 1, 1];
        $numbers[] = [31, 2, 62];
        $numbers[] = [10, 5, 10];
        $numbers[] = [10, 15, 30];
        $numbers[] = [15, 5, 15];
        $numbers[] = [35, 10, 70];
        $numbers[] = [12, 18, 36];

        return $numbers;
    }

    /**
     * @test
     * @dataProvider lcdDataProvider
     */
    public function shouldReturnExpectedLcd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, lcd($a, $b));
    }

}