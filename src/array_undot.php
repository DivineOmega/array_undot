<?php

use DivineOmega\ArrayUndot\ArrayHelpers;

if (!function_exists('array_undot')) {
    /**
     * Expands a dot notation array into a full multi-dimensional array
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
