<?php

if (!function_exists('array_undot')) {

    function array_undot($dotNotationArray) 
    {
        $array = [];
        foreach ($dotNotationArray as $key => $value) {
            array_set($array, $key, $value);
        }
        return $array;
    }

}