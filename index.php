<?php 

/* echo is a print command */
$name = "Galib Mia";
$age = 28;
$country = "Bangladesh";

echo "My name is ".$name.", and my age is ".$age. "\n";
echo "My name is {$name}, and my age is {$age}\n";
$output = sprintf ('My name is %2$s, and my age is %3$s, and country is %1$s', $name,$age, $country);

echo $output;


echo "\n";

$d = 191015012;

printf('Octal =  %1$o and Hexa = %1$x and Binary =  %1$b', $d);

$year = 2000;

if($year%4==0 && ($year%100!=0 || $year%400==0)){
    echo "{$year} is a leap Year.";
}else{
    echo "{$year} is not a leap Year.";
}

echo "\n";


$leapYear = ($year%4 == 0 && ($year%100!=0 || $year%400==0)) ? "{$year} is a leap Year." : "{$year} is not a leap Year.";
echo $leapYear;

echo "\n";

switch ($age){
    case 26:
        echo "Your age is 26";
        break;
    case 25:
        echo "Your age is 26";
        break;
    case 24:
        echo "Your age is 24";
        break;
    default:
        echo "I don't know about our age.";
}
echo PHP_EOL;

$n = 13;
$results = ($n%2 == 0) ? "A" : (($n == 11) ? "B" : "C" );

// echo $results;
echo PHP_EOL;