<?php

namespace App\Lib\Student\Lib;

use App\Lib\Student\StudentInterface;

/**
 * Class StudentBuilder
 * @package App\Lib\Student\Lib
 */
class StudentBuilder extends AbstractStudentBuilder
{
    private $student = null;

    public function __construct()
    {
        $this->student = new Student();
    }

    /**
     * @param $name
     */
    function setName($name)
    {
        $this->student->setName($name);
    }

    /**
     * @param $class
     */
    function setClass($class)
    {
        $this->student->setClass($class);
    }

    /**
     * @return mixed|void
     */
    function setStudent()
    {
        $this->student->formatStudent();
    }

    /**
     * @return Student|mixed|null
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     *
     */
    public function formatStudent()
    {
        $this->student->formatStudent();
    }
}