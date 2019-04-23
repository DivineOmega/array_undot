<?php

use DivineOmega\ArrayUndot\ArrayHelpers;

if (!function_exists('array_undot')) {
    /**
     * Process dot array will return undot array.
     *
     * @param array $dotNotationArray
     *
     * @return array
     */
    function array_undot(array $dotNotationArray)
    {
        return (new ArrayHelpers())->undot($dotNotationArray);
    }
}
