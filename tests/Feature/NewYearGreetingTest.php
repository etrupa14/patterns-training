<?php

namespace Tests\Feature;

use App\Lib\Greetings\Classes\ChristmasGreeting;
use App\Lib\Greetings\Classes\NewYearGreeting;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewYearGreetingTest extends TestCase
{
    /**
     * @test
     * A basic test example.
     *
     * @return void
     */
    public function newYearGreeting_nameMoreThan15char_idolNewYearGreeting()
    {
        $name = 'Edison Ducanes Trupa Manican';

        $greeting = new NewYearGreeting();
        $greetingResult = $greeting->greet($name);

        $result = ($greetingResult === 'Happy New Year '. $name);

        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function newYearGreetingChainChristMas_nameMoreThan15char_idolNewYearGreeting()
    {
        $name = 'Edison Ducanes Trupa Manican';

        $newYearGreeting = new NewYearGreeting();
        $christmasGreeting = new ChristmasGreeting();

        $newYearGreeting->setGreeting($christmasGreeting);
        $greetingResult = $newYearGreeting->greet($name);

        $result = ($greetingResult === 'Happy New Year '. $name);

        $this->assertTrue($result);
    }
}
