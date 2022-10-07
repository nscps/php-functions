<?php

namespace Nscps\Functions\Tests\MathFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use InvalidArgumentException;
use function Nscps\Functions\MathFunctions\sieve_of_eratosthenes;

class SieveOfEratosthenesTest extends CustomTestCase
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

        $numbers[] = [1, [
            1 => 1,
            2 => 2,
        ]];

        $numbers[] = [2, [
            1 => 1,
            2 => 2,
        ]];

        $numbers[] = [3, [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 2,
        ]];

        $numbers[] = [8, [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 2,
            5 => 5,
            6 => 2,
            7 => 7,
            8 => 2,
        ]];

        $numbers[] = [13, [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 2,
            5 => 5,
            6 => 2,
            7 => 7,
            8 => 2,
            9 => 3,
            10 => 2,
            11 => 11,
            12 => 2,
            13 => 13,
            14 => 2,
        ]];

        $numbers[] = [25, [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 2,
            5 => 5,
            6 => 2,
            7 => 7,
            8 => 2,
            9 => 3,
            10 => 2,
            11 => 11,
            12 => 2,
            13 => 13,
            14 => 2,
            15 => 3,
            16 => 2,
            17 => 17,
            18 => 2,
            19 => 19,
            20 => 2,
            21 => 3,
            22 => 2,
            23 => 23,
            24 => 2,
            25 => 5,
            26 => 2,
        ]];

        $numbers[] = [50, [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 2,
            5 => 5,
            6 => 2,
            7 => 7,
            8 => 2,
            9 => 3,
            10 => 2,
            11 => 11,
            12 => 2,
            13 => 13,
            14 => 2,
            15 => 3,
            16 => 2,
            17 => 17,
            18 => 2,
            19 => 19,
            20 => 2,
            21 => 3,
            22 => 2,
            23 => 23,
            24 => 2,
            25 => 5,
            26 => 2,
            27 => 3,
            28 => 2,
            29 => 29,
            30 => 2,
            31 => 31,
            32 => 2,
            33 => 3,
            34 => 2,
            35 => 5,
            36 => 2,
            37 => 37,
            38 => 2,
            39 => 3,
            40 => 2,
            41 => 41,
            42 => 2,
            43 => 43,
            44 => 2,
            45 => 3,
            46 => 2,
            47 => 47,
            48 => 2,
            49 => 7,
            50 => 2,
        ]];

        return $numbers;
    }

    /**
     * @test
     * @dataProvider negativeIntegerDataProvider
     */
    public function shouldThrowExceptionWhenNumberIsNegative(int $n): void
    {
        $this->expectException(InvalidArgumentException::class);

        sieve_of_eratosthenes($n);
    }

    /**
     * @test
     * @dataProvider nonNegativeIntegerDataProvider
     */
    public function shouldReturnSoeWhenNumberIsNonNegative(int $n, array $soe): void
    {
        $this->assertSame($soe, sieve_of_eratosthenes($n));
    }

}