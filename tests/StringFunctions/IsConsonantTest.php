<?php

namespace Nscps\Functions\Tests\StringFunctions;

use InvalidArgumentException;
use Nscps\Functions\Tests\CustomTestCase;
use function Nscps\Functions\StringFunctions\is_consonant;

class IsConsonantTest extends CustomTestCase
{

    /**
     * @test
     * @dataProvider vowelDataProvider
     */
    public function shouldReturnFalseWhenCharIsAVowel(string $string): void
    {
        $this->assertFalse(is_consonant($string));
    }

    /**
     * @test
     * @dataProvider consonantDataProvider
     */
    public function shouldReturnTrueWhenCharIsAConsonant(string $string): void
    {
        $this->assertTrue(is_consonant($string));
    }

    /**
     * @test
     */
    public function shouldReturnFalseWhenCharIsANumber(): void
    {
        $number = (string) self::faker()->numberBetween(0, 9);

        $this->assertFalse(is_consonant($number));
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenLengthIsZero(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->assertFalse(is_consonant(''));
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenLengthIsGreaterThanOne(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $text = self::faker()->realTextBetween(2, 100);

        is_consonant($text);
    }

}