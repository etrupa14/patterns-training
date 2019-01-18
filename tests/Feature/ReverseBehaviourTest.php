<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Lib\String\Classes\StringMain;

class ReverseBehaviourTest extends TestCase
{
    /** @test */
    public function reverseString_idol_lodi()
    {
        $string = 'idol';

        $stingManagement = new StringMain();
        $reversedString = $stingManagement->reverseString($string);

        // reverse reversed string back to normal and make comparison
        $result = ($string === strrev($reversedString));

        $this->assertTrue($result);
    }
}
