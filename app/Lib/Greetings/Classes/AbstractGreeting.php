<?php

namespace App\Lib\Greetings\Classes;
use App\Lib\Greetings\GreetingsInterface;

/**
 * Class AbstractGreeting
 * @package App\Lib\Greetings\Classes
 */
abstract class AbstractGreeting implements GreetingsInterface
{

    /**
     * @var
     */
    protected $greeting;

    /**
     * @param $nextGreeting
     * @return mixed|void
     */
    public function setGreeting($nextGreeting)
    {
        // check greeting
        if($this->greeting == null) {
            $this->greeting = $nextGreeting;
        } else {
            $this->greeting->setGreeting($nextGreeting);
        }

    }


    /**
     * @param $name
     * @return mixed|void
     */
    public function next($name)
    {
        if($this->greeting != null) {
            return $this->greeting->greet($name);
        }
    }
}