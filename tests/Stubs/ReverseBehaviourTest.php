<?php

namespace Tests\Stubs;


use App\Lib\String\StringInterface;

/**
 * Class ReverseBehaviourTest
 * @package Tests\Stubs
 */
class ReverseBehaviourTest implements StringInterface
{
    /**
     * @param string $string
     * @return mixed|string
     */
    public function reverseString($string = '')
    {
        return $string;
    }
}