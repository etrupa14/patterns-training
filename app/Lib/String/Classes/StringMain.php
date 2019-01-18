<?php

namespace App\Lib\String\Classes;
use App\Lib\String\StringInterface;

/**
 * Class StringMain
 * @package App\Lib\String\Classes
 */
class StringMain implements StringInterface
{
    /**
     * @param $string
     * @return mixed|string
     */
    public function reverseString($string)
    {
        return strrev($string);
    }
}