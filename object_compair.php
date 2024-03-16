<?php

class Student{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

$s1 = new Student("Galib");
$s2 = new Student("Galib");
$s3 = $s1;
if($s1===$s3){
    echo "Same Same";
}else{
    echo "Different"; 
}