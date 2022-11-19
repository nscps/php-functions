<?php

namespace Nscps\Functions\StringFunctions;

use Webmozart\Assert\Assert;

if (!function_exists('is_vowel')) {
    /**
     * Checks if a character is a vowel.
     *
     * @param string $str
     * @return bool
     */
    function is_vowel(string $str): bool
    {
        Assert::length($str, 1);

        return in_array(strtolower($str), ['a', 'e', 'i', 'o', 'u']);
    }
}