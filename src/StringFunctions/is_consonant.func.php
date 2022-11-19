<?php

namespace Nscps\Functions\StringFunctions;

use Webmozart\Assert\Assert;

if (!function_exists('is_consonant')) {
    /**
     * Checks if a character is a consonant.
     *
     * @param string $str
     * @return bool
     */
    function is_consonant(string $str): bool
    {
        Assert::length($str, 1);

        return in_array(strtolower($str), ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z']);
    }
}