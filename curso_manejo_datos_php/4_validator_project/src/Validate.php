<?php

namespace App;

class Validate
{
    public static function email($valor)
    {
        return (bool) filter_var($valor, FILTER_VALIDATE_EMAIL);
    }
    public static function url($valor)
    {
        return (bool) filter_var($valor, FILTER_VALIDATE_URL);
    }
    public static function password($valor)
    {
        return (bool) preg_match('/^[0-9]{6,9}$/', $valor);
    }
}
