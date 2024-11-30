<?php

class Validator
{
    public static function string($string, $min = 1, $max = INF)
    {
        $string = trim($string);
        return strlen($string) >= $min && strlen($string) <= $max;
    }
}