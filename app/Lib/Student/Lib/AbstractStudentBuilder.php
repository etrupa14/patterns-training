<?php

namespace App\Lib\Student\Lib;
use App\Lib\Student\StudentInterface;

/**
 * Class AbstractStudentBuilder
 * @package App\Lib\Student\Lib
 */
abstract  class AbstractStudentBuilder implements StudentInterface
{
    /**
     * @return mixed
     */
    abstract function getStudent();
}