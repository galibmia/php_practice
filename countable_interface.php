<?php

class Districts implements IteratorAggregate,Countable{
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

    function count(): int
    {
        return count($this->districts);
    }
}

$districts = new Districts;
$districts->add("Dhaka");
$districts->add("Khulna");
$districts->add("Barishal");
$districts->add("Comilla");
$districts->add("Chottogram");
$districts->add("Sylhet");
$districts->add("Gazipur");
$districts->add("Gopalganj");

echo count($districts);