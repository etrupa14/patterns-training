<?php

namespace App\Lib\Greetings;

/**
 * Interface GreetingsInterface
 */
interface GreetingsInterface {

    /**
     * @param $name
     * @return mixed
     */
    public function greet($name);

    /**
     * @param $nextGreeting
     * @return mixed
     */
    public function setGreeting($nextGreeting);

    /**
     * @param $name
     * @return mixed
     */
    public function next($name);
}
