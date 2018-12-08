<?php

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
        $array = [];
        foreach ($dotNotationArray as $key => $value) {
            array_set($array, $key, $value);
        }

        return $array;
    }
}
