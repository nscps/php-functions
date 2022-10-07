<?php

namespace Nscps\Functions\Tests\MathFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use InvalidArgumentException;
use function Nscps\Functions\MathFunctions\prime_numbers;

class PrimeNumbersTest extends CustomTestCase
{

    public function negativeIntegerDataProvider(): array
    {
        $numbers = [];
        $numbers[] = [-1];

        for ($i = 1; $i <= 5; $i++) {
            $numbers[] = [self::faker()->numberBetween(1) * -1];
        }

        return $numbers;
    }

    public function nonNegativeIntegerDataProvider(): array
    {
        $numbers = [];

        $numbers[] = [0, []];
        $numbers[] = [1, []];
        $numbers[] = [2, [2]];
        $numbers[] = [3, [2, 3]];
        $numbers[] = [8, [2, 3, 5, 7]];
        $numbers[] = [13, [2, 3, 5, 7, 11, 13]];
        $numbers[] = [25, [2, 3, 5, 7, 11, 13, 17, 19, 23]];
        $numbers[] = [50, [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47]];

        return $numbers;
    }

    /**
     * @test
     * @dataProvider negativeIntegerDataProvider
     */
    public function shouldThrowExceptionWhenNumberIsNegative(int $n): void
    {
        $this->expectException(InvalidArgumentException::class);

        prime_numbers($n);
    }

    /**
     * @test
     * @dataProvider nonNegativeIntegerDataProvider
     */
    public function shouldReturnSoeWhenNumberIsNonNegative(int $n, array $primes): void
    {
        $this->assertSame($primes, prime_numbers($n));
    }

}