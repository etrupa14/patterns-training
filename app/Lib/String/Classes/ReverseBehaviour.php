<?php

namespace App\Lib\String\Classes;
use App\Lib\String\StringInterface;

/**
 * Class ReverseBehaviour
 * @package App\Lib\String\Classes
 */
class ReverseBehaviour implements StringInterface
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