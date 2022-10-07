<?php

namespace Nscps\Functions\Tests\StringFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use function Nscps\Functions\StringFunctions\is_palindrome;

class IsPalindromeTest extends CustomTestCase
{

    public function validPalindromeDataProvider(): array
    {
        $palindromes = [];

        $palindromes[] = [''];
        $palindromes[] = ['747'];
        $palindromes[] = ['ada'];
        $palindromes[] = ['civic'];
        $palindromes[] = ['racecar'];
        $palindromes[] = ['level'];

        return $palindromes;
    }

    public function invalidPalindromeDataProvider(): array
    {
        $palindromes = [];

        $palindromes[] = ['380'];
        $palindromes[] = ['odd'];
        $palindromes[] = ['banana'];
        $palindromes[] = ['taxation is theft'];

        return $palindromes;
    }

    /**
     * @test
     * @dataProvider validPalindromeDataProvider
     */
    public function shouldReturnTrueWhenTheWordIsAPalindrome(string $string): void
    {
        $this->assertTrue(is_palindrome($string));
    }

    /**
     * @test
     * @dataProvider invalidPalindromeDataProvider
     */
    public function shouldReturnFalseWhenTheWordIsNotAPalindrome(string $string): void
    {
        $this->assertFalse(is_palindrome($string));
    }

}