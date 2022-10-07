<?php

namespace Nscps\Functions\Tests\ConverterFunctions\Time;

use Nscps\Functions\Tests\CustomTestCase;

abstract class TimeTestCase extends CustomTestCase
{

    abstract public function validTimeDataProvider(): array;

    public function invalidTimeDataTypeDataProvider(): array
    {
        $numbers = [];

        $numbers[] = [''];
        $numbers[] = ['foo'];
        $numbers[] = ['foo123'];
        $numbers[] = ['123foo'];

        return $numbers;
    }

}