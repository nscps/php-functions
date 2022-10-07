<?php

namespace Nscps\Functions\Tests;

use Faker\Factory as FakerFactory;
use Faker\Generator as Faker;
use PHPUnit\Framework\TestCase;

abstract class CustomTestCase extends TestCase
{

    protected static function faker(): Faker
    {
        return FakerFactory::create();
    }

}