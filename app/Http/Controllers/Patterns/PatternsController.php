<?php

namespace App\Http\Controllers\Patterns;

use App\Http\Controllers\Controller;
use App\Lib\Greetings\Classes\ChristmasGreeting;
use App\Lib\Greetings\Classes\NewYearGreeting;
use App\Lib\String\Classes\ConcatDecorator;
use App\Lib\String\Classes\StringMain;
use App\Lib\Student\Lib\StudentBuilder;
use App\Lib\Student\Lib\StudentManager;

/**
 * Class PatternsController
 * @package App\Http\Controllers\Patterns
 */
class PatternsController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function decorator()
    {
        $result = '';

        if(request()->isMethod('post')) {
            $string = request()->get('string');
            $stringManagement = new StringMain();

            $stringDecorator = new ConcatDecorator($stringManagement);
            $result = $stringDecorator->reverseString($string);
        }

        return view('decorator', [
            'result' => $result
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function chain()
    {
        // variable
        $result = '';

        if(request()->isMethod('post')) {
            $name = request()->get('name');

            // instantiation
            $christmasGreeting = new ChristmasGreeting();
            $newYearGreeting = new NewYearGreeting();

            // set fallback greeting
            $christmasGreeting->setGreeting($newYearGreeting);

            // do greeting
            $result = $christmasGreeting->greet($name);
        }

        return view('chain-of-responsibility', [
            'result' => $result
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function builder()
    {
        // var
        $result = '';

        if(request()->isMethod('post')) {

            // initialize request data
            $name = request()->get('name');
            $class = request()->get('class');

            $studentBuilder = new StudentBuilder();
            $studentBuilderManager = new StudentManager($studentBuilder);

            $studentBuilderManager->buildStudent($name, $class);
            $result = $studentBuilderManager->getStudent();

            $result = $result->getFormattedStudent();
        }

        return view('builder', [
            'result' => $result
        ]);
    }
}