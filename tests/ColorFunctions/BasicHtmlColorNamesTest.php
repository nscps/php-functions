<?php

namespace Nscps\Functions\Tests\ColorFunctions;

use Nscps\Functions\Tests\CustomTestCase;
use function Nscps\Functions\ColorFunctions\basic_html_color_names;

class BasicHtmlColorNamesTest extends CustomTestCase
{

    /**
     * @test
     */
    public function shouldReturnNamesOfBasicColors(): void
    {
        $expected = [
            'aqua',
            'black',
            'blue',
            'fuchsia',
            'gray',
            'green',
            'lime',
            'maroon',
            'navy',
            'olive',
            'purple',
            'red',
            'silver',
            'teal',
            'white',
            'yellow',
        ];

        $actual = basic_html_color_names();

        $this->assertCount(16, $actual);

        $this->assertEquals($expected, $actual);
    }

}