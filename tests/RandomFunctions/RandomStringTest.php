<?php

namespace Nscps\Functions\Tests\RandomFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use InvalidArgumentException;
use function Nscps\Functions\RandomFunctions\random_string;

class RandomStringTest extends CustomTestCase
{

    public function invalidLengthDataProvider(): array
    {
        return [
            [-1],
            [0],
        ];
    }

    public function validLengthDataProvider(): array
    {
        return [
            [1],
            [8],
            [16],
            [128],
        ];
    }

    /**
     * @test
     * @dataProvider invalidLengthDataProvider
     */
    public function shouldThrowExceptionWhenLengthArgIsInvalid(int $length): void
    {
        $this->expectException(InvalidArgumentException::class);

        random_string($length);
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenCandidatesArgIsInvalid(): void
    {
        $this->expectException(InvalidArgumentException::class);

        random_string(1, '');
    }

    /**
     * @test
     * @dataProvider validLengthDataProvider
     */
    public function shouldReturnRandomStringWhenLengthArgIsPassed(int $length): void
    {
        $string = random_string($length);
        $string_length = strlen($string);

        $this->assertSame($length, $string_length);

        for ($i = 0; $i < $string_length; $i++) {
            $this->assertStringContainsString($string[$i], CL_RANDOM_ALPHANUMERIC);
        }
    }

}