<?php

namespace Tests\Feature;

use App\Lib\String\Classes\ConcatDecorator;
use Tests\Stubs\ReverseBehaviourTest;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConcatDecoratorTest extends TestCase
{
    /**
     * @test
     */
    public function reverseStringWithAddionalText_lodi_AdditionalText()
    {
        $stringMainStub = new ReverseBehaviourTest();
        $concatDecorator = new ConcatDecorator($stringMainStub);

        $concatResult = $concatDecorator->reverseString('');

        // check for specific word string occurrence
        $result = (preg_match('/Additional Text/', $concatResult));

        // converts value to booean
        $result = ($result) ? true : false;

        $this->assertTrue($result);
    }
}
