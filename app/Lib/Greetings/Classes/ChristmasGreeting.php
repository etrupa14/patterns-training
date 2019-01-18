<?php

namespace App\Lib\Greetings\Classes;

/**
 * Class ChristmasGreeting
 * @package App\Lib\Greetings\Classes
 */
class ChristmasGreeting extends AbstractGreeting
{

    /**
     * @param $name
     * @return mixed|string
     */
    public function greet($name)
    {
        if(strlen($name) < 15) {
            return 'Merry Christmas ' . $name;
        }
        return $this->next($name);
    }
}