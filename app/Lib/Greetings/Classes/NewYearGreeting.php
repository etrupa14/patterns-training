<?php

namespace App\Lib\Greetings\Classes;


/**
 * Class NewYearAbstractGreeting
 * @package App\Lib\Greetings\Classes
 */
class NewYearGreeting extends AbstractGreeting
{

    /**
     * @param $name
     * @return mixed|string
     */
    public function greet($name)
    {
        if(strlen($name) > 15) {
            return 'Happy New Year ' . $name;
        }

        return $this->next($name);
    }

}