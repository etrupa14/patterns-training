<?php

namespace Tests\Feature;

use App\Lib\Greetings\Classes\NewYearGreeting;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Lib\Greetings\Classes\ChristmasGreeting;

class ChristmasGreetingTest extends TestCase
{

    /**
     * @test
     * A basic test example.
     *
     * @return void
     */
    public function christMasGreeting_idol_idolChristmasGreeting()
    {
        $name = 'idol';
        $greeting = new ChristmasGreeting();

        // get appropriate greeting
        $greetingResult = $greeting->greet($name);

        $result = ($greetingResult === 'Merry Christmas ' . $name);

        $this->assertTrue($result);
    }

    /**
     * @test
     *
     */
    public function christmasGreetingChainHappyNewYear_idol_idolChristmasGreeting()
    {
        $name = 'idol';

        $christmasGreeting = new ChristmasGreeting();
        $newYearGreeting = new NewYearGreeting();

        // set next catch
        $christmasGreeting->setGreeting($newYearGreeting);

        $greetingResult = $christmasGreeting->greet($name);

        $result = ($greetingResult === 'Merry Christmas ' . $name);

        $this->assertTrue($result);
    }
}
