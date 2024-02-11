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

// Factorial Number using for loop
$number = 6;
for($i = $number, $factorial = 1 ; $i>1; $i--){
    $factorial = $factorial * $i;
}
echo "[Using for loop] Factorial of {$number} is {$factorial}";

echo PHP_EOL;
// Factorial Number using do-while loop

$number = 6;
$i = $number;
$factorial = 1;
do{
    $factorial = $factorial * $i;
    $i--;
}while($i>1);
printf("[Using do-while loop] Factorial of %d is %d", $number, $factorial);
echo PHP_EOL;

// Factorial Number using while loop
$number = 6;
$i = $number;
$factorial = 1;
while($i>1){
    $factorial = $factorial * $i;
    $i--;
}
printf("[Using while loop] Factorial of %d is %d", $number, $factorial);

echo PHP_EOL;


$veryOld = 0;
$old = 1;
$new = 1;
$n = 10;

for($i = 0; $i<=$n; $i++){
    if($i== $n){
        echo "Fibonacci of {$n}th number is ".$veryOld;
        }
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}

echo PHP_EOL;
// Spaceship Operator

$x = 6;
$y = 7;

$results = $x<=>$y;

if($results >=1){
    echo "X is Big";
}elseif($results ==0){
    echo "X is equal to Y";
}elseif($results <=-1){
    echo "Y is Big";
}

echo PHP_EOL;
// Null coalescing operator

$default_n = 5;
$n;

$number = $n ?? $default_n;
echo $number;


echo PHP_EOL;
// Fibonacci using recursive Function

function fibonacci($number){
    static $old = 0;
    static $new = 1;
    static $start = 0;
    $start = $start ?? 1;
    if($start==$number){
        echo "The {$number}th Fibonacci Number is {$old}.";
        return;
    }
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    
    $start++;
    fibonacci($number);
    
    

}

$number = 10;
fibonacci($number);