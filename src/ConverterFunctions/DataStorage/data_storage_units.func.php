<?php

namespace Nscps\Functions\ConverterFunctions\DataStorage;

if (!function_exists('data_storage_units')) {
    /**
     * Returns a list of data storage units.
     *
     * @return array[]
     * @internal
     */
    function data_storage_units(): array
    {
        return [
            [
                'name' => 'Yottabyte',
                'shortened' => 'YB',
                'capacity' => '1000 ZB'
            ],
            [
                'name' => 'Zettabyte',
                'shortened' => 'ZB',
                'capacity' => '1000 EB'
            ],
            [
                'name' => 'Exabyte',
                'shortened' => 'EB',
                'capacity' => '1000 PB'
            ],
            [
                'name' => 'Petabyte',
                'shortened' => 'PB',
                'capacity' => '1000 TB'
            ],
            [
                'name' => 'Terabyte',
                'shortened' => 'TB',
                'capacity' => '1000 GB'
            ],
            [
                'name' => 'Gigabyte',
                'shortened' => 'GB',
                'capacity' => '1000 MB'
            ],
            [
                'name' => 'Megabyte',
                'shortened' => 'MB',
                'capacity' => '1000 KB'
            ],
            [
                'name' => 'Kilobyte',
                'shortened' => 'KB',
                'capacity' => '1000 B'
            ],
            [
                'name' => 'Byte',
                'shortened' => 'B',
                'capacity' => '8 bits'
            ],
            [
                'name' => 'Bit',
                'shortened' => 'b',
                'capacity' => '1'
            ],
        ];
    }
}