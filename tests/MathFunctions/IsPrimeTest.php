<?php

namespace Nscps\Functions\Tests\MathFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use function Nscps\Functions\MathFunctions\is_prime;
use function Nscps\Functions\MathFunctions\prime_numbers;
use function Nscps\Functions\MathFunctions\sieve_of_eratosthenes;

class IsPrimeTest extends CustomTestCase
{

    public function negativeNumbersDataProvider(): array
    {
        $numbers = [];

        $faker = self::faker();
        for ($i = 1; $i <= 5; $i++) {
            $numbers[] = [$faker->numberBetween(-10000, -1)];
        }

        return $numbers;
    }

    public function evenNumbersGreaterThanTwoDataProvider(): array
    {
        $numbers = [];

        $faker = self::faker();
        for ($i = 1, $nb_tests = 1; $nb_tests <= 5; $i++) {
            $number = $faker->numberBetween(4, 10000);

            if ($number % 2 === 0) {
                $numbers[] = [$number];
                $nb_tests++;
            }
        }

        return $numbers;
    }

    public function nonPrimeOddNumbersDataProvider(): array
    {
        $numbers = [];

        foreach (sieve_of_eratosthenes(1000) as $number => $lcd) {
            if ($number !== $lcd && $number % 2 === 1) {
                $numbers[] = [$number];
            }
        }

        return $numbers;
    }

    public function primeNumbersDataProvider(): array
    {
        $primes = [];

        foreach (prime_numbers(1000) as $prime) {
            $primes[] = [$prime];
        }

        return $primes;
    }

    /**
     * @test
     * @dataProvider negativeNumbersDataProvider
     */
    public function shouldReturnFalseForNegativeNumbers(int $number): void
    {
        $this->assertFalse(is_prime($number));
    }

    /**
     * @test
     */
    public function shouldReturnFalseForZero(): void
    {
        $this->assertFalse(is_prime(0));
    }

    /**
     * @test
     */
    public function shouldReturnFalseForOne(): void
    {
        $this->assertFalse(is_prime(1));
    }

    /**
     * @test
     * @dataProvider evenNumbersGreaterThanTwoDataProvider
     */
    public function shouldReturnFalseForEvenNumbersGreaterThanTwo(int $number): void
    {
        $this->assertFalse(is_prime($number));
    }

    /**
     * @test
     * @dataProvider nonPrimeOddNumbersDataProvider
     */
    public function shouldReturnFalseForOddAndNonPrimeNumbers(int $number): void
    {
        $this->assertFalse(is_prime($number));
    }

    /**
     * @test
     * @dataProvider primeNumbersDataProvider
     */
    public function shouldReturnTrueForPrimeNumbers(int $prime_number): void
    {
        $this->assertTrue(is_prime($prime_number));
    }

}