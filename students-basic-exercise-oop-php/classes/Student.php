<?php
    namespace Students;
class Student{
    private $name, $grade;
    function __construct($name, $grade){
        $this->name = $name;
        $this->grade = $grade;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getGrade()
    {
        return $this->grade;
    }
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }
}