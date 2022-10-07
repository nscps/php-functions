<?php

namespace Nscps\Functions\MathFunctions;

use Webmozart\Assert\Assert;

if (!function_exists('prime_numbers')) {
    /**
     * Return a list of prime numbers.
     *
     * @param int $n
     * @return int[]
     */
    function prime_numbers(int $n): array
    {
        Assert::greaterThanEq($n, 0);

        $prime_numbers = [];

        $soe = sieve_of_eratosthenes($n);

        for ($i = 2; $i <= $n; $i++) {
            if ($soe[$i] === $i) {
                $prime_numbers[] = $i;
            }
        }

        return $prime_numbers;
    }
}