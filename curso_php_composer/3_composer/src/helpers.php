<?php

/**
 * Siempre se debe validar si la función existe en el namespace
 * en uso antes de definirla
 */
if (!function_exists("upper")) {
    function upper($value)
    {
        return Text\Format::upper_text($value);
    }
}

if (!function_exists("lower_text")) {
    function lower($value)
    {
        return Text\Format::lower_text($value);
    }
}
