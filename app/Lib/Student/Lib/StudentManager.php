<?php

namespace App\Lib\Student\Lib;


class StudentManager extends AbstractStudentManager
{
    private $builder = null;

    /**
     * StudentManager constructor.
     * @param AbstractStudentBuilder $builder
     */
    public function __construct(AbstractStudentBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param string $name
     * @param string $class
     * @return mixed|void
     */
    public function buildStudent($name = '', $class = '')
    {
        $this->builder->setName($name);
        $this->builder->setClass($class);

        $this->builder->formatStudent();
    }

    /**
     * @return mixed
     */
    public function getStudent()
    {
        return $this->builder->getStudent();
    }

    /**
     * @return mixed|void
     */
    public function setStudent() {}

}