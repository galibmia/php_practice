<?php

class Student{

    static function echoName(){
        // echo self::getName(); // Early Binding
        echo static::getName(); // Late Binding
    }

    static function getName(){
        return "Galib";
    }
}

class Sadia extends Student{
    static function getName(){
        return "Sadia";
    }
}

// Student::echoName();
Sadia::echoName();

