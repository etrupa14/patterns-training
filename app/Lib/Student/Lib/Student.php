<?php

namespace App\Lib\Student\Lib;

/**
 * Class Student
 * @package App\Lib\Student\Lib
 */
class Student
{
    /**
     * @var null
     */
    private $name = null;

    /**
     * @var null
     */
    private $class = null;

    /**
     * @var null
     */
    private $formattedStudent = null;

    function __construct()
    {
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param null $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Modify Student Formatted Summary
     */
    public function formatStudent()
    {
        if ($this->name) {
            $this->formattedStudent .= 'Student: ' . $this->name;
        }

        if ($this->class) {
            $this->formattedStudent .= ' belongs in ' . $this->class;
        }
    }

    /**
     * @return null
     */
    public function getFormattedStudent()
    {
        return $this->formattedStudent;
    }

}