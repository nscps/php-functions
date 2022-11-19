<?php

namespace Nscps\Functions\Tests;

use Faker\Factory as FakerFactory;
use Faker\Generator as Faker;
use PHPUnit\Framework\TestCase;

abstract class CustomTestCase extends TestCase
{

    public function vowelDataProvider(): array
    {
        $chars = [];

        // Lowercase
        $chars[] = ['a'];
        $chars[] = ['e'];
        $chars[] = ['i'];
        $chars[] = ['o'];
        $chars[] = ['u'];

        // Uppercase
        $chars[] = ['A'];
        $chars[] = ['E'];
        $chars[] = ['I'];
        $chars[] = ['O'];
        $chars[] = ['U'];

        return $chars;
    }

    public function consonantDataProvider(): array
    {
        $chars = [];

        // Lowercase
        $chars[] = ['b'];
        $chars[] = ['c'];
        $chars[] = ['d'];
        $chars[] = ['f'];
        $chars[] = ['g'];
        $chars[] = ['h'];
        $chars[] = ['j'];
        $chars[] = ['k'];
        $chars[] = ['l'];
        $chars[] = ['m'];
        $chars[] = ['n'];
        $chars[] = ['p'];
        $chars[] = ['q'];
        $chars[] = ['r'];
        $chars[] = ['s'];
        $chars[] = ['t'];
        $chars[] = ['v'];
        $chars[] = ['w'];
        $chars[] = ['x'];
        $chars[] = ['y'];
        $chars[] = ['z'];

        // Uppercase
        $chars[] = ['B'];
        $chars[] = ['C'];
        $chars[] = ['D'];
        $chars[] = ['F'];
        $chars[] = ['G'];
        $chars[] = ['H'];
        $chars[] = ['J'];
        $chars[] = ['K'];
        $chars[] = ['L'];
        $chars[] = ['M'];
        $chars[] = ['N'];
        $chars[] = ['P'];
        $chars[] = ['Q'];
        $chars[] = ['R'];
        $chars[] = ['S'];
        $chars[] = ['T'];
        $chars[] = ['V'];
        $chars[] = ['W'];
        $chars[] = ['X'];
        $chars[] = ['y'];
        $chars[] = ['Z'];

        return $chars;
    }

    protected static function faker(): Faker
    {
        return FakerFactory::create();
    }

}