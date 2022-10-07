<?php

namespace Nscps\Functions\MathFunctions;

if (!function_exists('is_prime')) {
    /**
     * Checks if a number is a prime number.
     *
     * @param int $n
     * @return bool
     */
    function is_prime(int $n): bool
    {
        if ($n <= 1) {
            return false;
        }

        if ($n === 2) {
            return true;
        }

        if ($n % 2 === 0) {
            return false;
        }

        $sqrt = (int) sqrt($n);
        for ($i = 3; $i <= $sqrt; $i += 2) {
            if ($n % $i === 0) {
                return false;
            }
        }

        return true;
    }
}