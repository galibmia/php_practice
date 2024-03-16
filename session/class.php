<?php

class Shape{
    protected $name;
    protected $area;
    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }
    public function getArea(){
        echo "This {$this->name}'s Area is {$this->area}";
    }
    public function calculateArea(){}
}

class Rectangular extends Shape{
    protected $a, $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangular");
    }
    public function calculateArea(){
        $this->area = $this->a*$this->b;
    }
}

class Triangle extends Shape{
    protected $a, $b, $c;
   public function __construct($a, $b, $c)
   {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    parent::__construct("Triangle");
   }
   public function calculateArea(){
    $perimeter = ($this->a+$this->b+$this->c)/2;
    $this->area = number_format(sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c)), 3);
}
}

$r = new Rectangular(4,2);
$r->getArea();
$t = new Triangle(100,100,100);
$t->getArea();

