<?php

class Districts implements IteratorAggregate{
    private $districts;

    function __construct(){
        $this->districts=array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    public function getIterator(): Traversable { 
        return new ArrayIterator($this->districts);
    }
}

$districts = new Districts();
$districts->add("Dhaka");
$districts->add("Khulna");
$districts->add("Barishal");
$districts->add("Comilla");
$districts->add("Chottogram");
foreach ($districts as $district) {
    echo $district . "\n";
}