<?php

namespace Nscps\Functions\Tests\ArrayFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use function Nscps\Functions\ArrayFunctions\array_value_recursive;

class ArrayValueRecursiveTest extends CustomTestCase
{

    public function validArrayDataProvider(): array
    {
        $inputs = [];

        $inputs[] = [[], []];
        $inputs[] = [[1], [1]];
        $inputs[] = [[1, 1], [1, 1]];
        $inputs[] = [[1, 2], [1, 2]];
        $inputs[] = [[2, 1], [2, 1]];
        $inputs[] = [[1, 2, ['a', 'b', 'c']], [1, 2, 'a', 'b', 'c']];
        $inputs[] = [[1, 2, ['a', 'b', ['z', 9], 'c']], [1, 2, 'a', 'b', 'z', 9, 'c']];

        return $inputs;
    }

    /**
     * @test
     * @dataProvider validArrayDataProvider
     */
    public function shouldReplaceKeyOfAnArray(array $arr, array $expected): void
    {
        $this->assertSame($expected, array_value_recursive($arr));
    }

}