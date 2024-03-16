<?php

namespace School;

class Student{
    private $name, $roll;

    function __construct($name, $roll)
    {
        $this->name = $name;
        $this->roll = $roll;
    }

    function getStudentRoll(){
        return $this->roll;
    }
    function getStudentName(){
        return $this->name;
    }
}
