<?php

namespace App\Lib\Student\Lib;

use App\Lib\Student\StudentInterface;

/**
 * Class AbstractStudentManager
 * @package App\Lib\Student\Lib
 */
abstract class AbstractStudentManager implements StudentInterface
{
    /**
     * AbstractStudentManager constructor.
     * @param AbstractStudentBuilder $builder
     */
    abstract function __construct(AbstractStudentBuilder $builder);

    /**
     * @return mixed
     */
    abstract function buildStudent();

    /**
     * @return mixed
     */
    abstract function getStudent();

}