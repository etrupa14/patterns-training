<?php

namespace App\Lib\String\Classes;

use App\Lib\String\StringInterface;

/**
 * Class ConcatDecorator
 * @package App\Lib\String\Classes
 */
class ConcatDecorator implements StringInterface
{
    protected $string;

    /**
     * ConcatDecorator constructor.
     * @param $string
     */
    public function __construct(StringInterface $string)
    {
        $this->string = $string;
    }

    /**
     * @param $stringToReverse
     * @return mixed|string
     */
    public function reverseString($stringToReverse)
    {
        return $this->string->reverseString($stringToReverse) . ' Additional Text';
    }
}