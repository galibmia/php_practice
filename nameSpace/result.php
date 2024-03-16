<?php

namespace School\Results;

class Result{
    private $student;

    function __construct($student)
    {
        $this->student = $student;
    }

    function getResult(){
        $name = $this->student->getStudentName();
        $roll = $this->student->getStudentRoll();

        if("Galib" == $name && 12 == $roll){
            echo "{$name} gets GPA-4.69\n";
        } elseif("Sadia" == $name && 72 == $roll){
            echo "{$name} gets GPA-5.00\n";
        } elseif("Afroza" == $name && 35 == $roll){
            echo "{$name} gets GPA-3.25\n";
        } else {
            echo "{$name} isn't a student\n";
        }
    }
}
