<?php

namespace Nscps\Functions\Tests\StringFunctions;

use InvalidArgumentException;
use Nscps\Functions\Tests\CustomTestCase;
use function Nscps\Functions\StringFunctions\is_vowel;

class IsVowelTest extends CustomTestCase
{

    /**
     * @test
     * @dataProvider vowelDataProvider
     */
    public function shouldReturnTrueWhenCharIsAVowel(string $string): void
    {
        $this->assertTrue(is_vowel($string));
    }

    /**
     * @test
     * @dataProvider consonantDataProvider
     */
    public function shouldReturnFalseWhenCharIsAConsonant(string $string): void
    {
        $this->assertFalse(is_vowel($string));
    }

    /**
     * @test
     */
    public function shouldReturnFalseWhenCharIsANumber(): void
    {
        $number = (string) self::faker()->numberBetween(0, 9);

        $this->assertFalse(is_vowel($number));
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenLengthIsZero(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->assertFalse(is_vowel(''));
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenLengthIsGreaterThanOne(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $text = self::faker()->realTextBetween(2, 100);

        is_vowel($text);
    }

}