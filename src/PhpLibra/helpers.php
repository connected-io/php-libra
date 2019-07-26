<?php

if (!function_exists('convert_libra')) {
    /**
     * Convert whole libra
     */
    function convert_libra($libraMillis)
    {
        return $libraMillis / 1000000;
    }
}

if (!function_exists('dd')) {
    /**
     * Dump and die.
     * @param $args
     */
    function dd($arg)
    {
        var_dump($arg);
        die;
    }
}

if (!function_exists('dc')) {
    /**
     * Dump and die class name
     * @param $args
     */
    function dc($arg)
    {
        dd(get_class($arg));
    }
}

if (!function_exists('is_binary')) {
    /**
     * Detect if a string is binary.
     * @param $str
     * @return bool
     */
    function is_binary($str)
    {
        return preg_match('~[^\x20-\x7E\t\r\n]~', $str) > 0;
    }
}
