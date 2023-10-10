<?php

namespace Core;

use PhpParser\Node\Expr\Cast\Bool_;

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
