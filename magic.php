<?php

class Student{
    private $name;
    private $age;

    function __construct($name='', $age='')
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop= $value;
    }
}

$R = new Student("Galib", 26);
$R->name="Sadia";
echo $R->name."\n";
echo $R->age;