<?php

namespace Nscps\Functions\MathFunctions;

use Webmozart\Assert\Assert;

if (!function_exists('sieve_of_eratosthenes')) {
    /**
     * Return the Sieve of Eratosthenes.
     *
     * @param int $n
     * @return int[]
     * @link https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes
     * @internal
     */
    function sieve_of_eratosthenes(int $n): array
    {
        Assert::greaterThanEq($n, 0);

        $soe = [];

        for ($i = 1; $i <= $n; $i += 2) {
            $soe[$i] = $i;
            $soe[$i+1] = 2;
        }

        $sqrt = sqrt($n);
        for ($i = 3; $i <= $sqrt; $i += 2) {
            if ($soe[$i] === $i) {
                $t = $i * $i;
                $d = $i + $i;

                while ($t <= $n) {
                    if ($soe[$t] === $t) {
                        $soe[$t] = $i;
                    }

                    $t += $d;
                }
            }
        }

        return $soe;
    }
}