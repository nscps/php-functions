<?php

namespace Nscps\Functions\ExpressionFunctions;

if (!function_exists('remove_extra_parenthesis')) {
    /**
     * Removes extra parenthesis from an expression.
     *
     * Notice that this function remove only "extra" parenthesis.
     * It does not evaluate if the parenthesis are unnecessary and can be removed.
     *
     * @param string $expression
     * @return string
     */
    function remove_extra_parenthesis(string $expression): string
    {
        if ($expression === '') {
            return '';
        }

        $length = strlen($expression);

        // Find sequence of "open parenthesis"
        $i = $first = strpos($expression, '(');
        if ($i === false) {
            return $expression;
        }
        while ($i + 1 < $length && $expression[$i + 1] === '(') {
            $i++;
        }

        // Find sequence of "close parenthesis"
        $j = $last = strpos(substr($expression, $i + 1), ')') + $i + 1;
        if ($j === false) {
            return $expression;
        }
        while ($last + 1 < $length && $expression[$last + 1] === ')') {
            $last++;
        }

        // Number of parenthesis that we should remove
        $nb_parenthesis = min($i - $first, $last - $j);
        if ($nb_parenthesis === 0) {
            return $expression;
        }

        return trim(
            // from 0 to first char before the first "open parenthesis"
            substr($expression, 0, $first) .

            // open parenthesis
            '(' .

            // from the first char after the last "open parenthesis"
            // to the first char before the first "close parenthesis"
            substr($expression, $i + 1, $j - $i - 1) .

            // close parenthesis
            ')' .

            // remove extra parenthesis from the first char after the last "close parenthesis"
            // to the end of the expression
            remove_extra_parenthesis(substr($expression, $last + 1))
        );
    }
}