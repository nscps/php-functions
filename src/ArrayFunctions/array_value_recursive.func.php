<?php

namespace Nscps\Functions\ArrayFunctions;

if (!function_exists('array_value_recursive')) {
    /**
     * Find all values recursively.
     *
     * @param array $arr
     * @return array
     */
    function array_value_recursive(array $arr)
    {
        $return = [];

        foreach ($arr as $value) {
            if (is_array($value)) {
                $return[] = array_value_recursive($value);
            } else {
                $return[] = [$value];
            }
        }

        return array_merge([], ...$return);
    }
}