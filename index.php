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
echo PHP_EOL;

// Factorial using recursive Function

function factorial(int $n){
    if($n==1){
        return 1;
    }
    return $n * factorial($n-1);
}
$number = 5;
$result = factorial($number);
echo "The Factorial of {$number} is {$result}.";


echo PHP_EOL;
// Nested Array \\ Multidimensional Array.

$students = [
    'name'=> ['Galib', 'Rostom', 'Tarikul'],
    'roll' => [12, 13, 15, 13],
    'home' => [
        ['house'=> 13, 'road'=>17, 'Thana'=>'Mirpur', 'District'=> 'Dhaka'],
        ['house'=> 25, 'road'=>07, 'Thana'=>'Uttara', 'District'=> 'Dhaka'],
        ['house'=> 25, 'road'=>18, 'Thana'=>'Mohammadpur', 'District'=> 'Dhaka']
        ]
];

$tarikulAddress = $students['home'][2]['Thana'];
echo $tarikulAddress;


echo PHP_EOL;

// Array sorting: 
/**
 * sort($arrayName) --- using this, sort by value.
 * rsort($arrayName) --- sort by value reverse.
 * asort($arrayName) --- sort by value with contain index/key. 
 * arsort($arrayName) --- sort by value with contain index/key reverse. 
 * ksort($arrayName) --- sort by index/key value. 
 * krsort($arrayName) --- sort by index/key value reverse. 
 */

$number = [12, 45, 16, 89 ,11, 10];

sort($number); 
print_r($number);


echo PHP_EOL;
/** Array Search:
*   in_array(Element, arrayName): Check element exist or not.
*   array_search(Element, arrayName):if exist, return index number 
*/

$searchingElement = 11;

if(in_array($searchingElement, $number)){ // Array Search: Check element exist or not. 
    $offset = array_search($searchingElement, $number); // Array Search:if exist, return index number
    printf("{$searchingElement} is found in index number {$offset}");
}else{
    echo "Not found";
}


echo PHP_EOL;
/** Array Common Element Search:
*   array_intersect(arrayName, arrayName): Check the element of First array are exist in the Second array. Return matched value/element from First array.

*  array_intersect_assoc(arrayName, arrayName): Check the element and also the index/key of First array are exist in the Second array. Return matched value/element and index/key from First array.

* array_diff(arrayName, arrayName): Check the element of First array are not exist in the Second array. Return not matched value/element from First array.

* array_diff(arrayName, arrayName): Check the element and index\key of First array are not exist in the Second array. Return not matched value/element with index/key from First array.
*/

$arrayOne = [15, 10, 26, 24, 25];
$arrayTwo = [16, 10, 21, 26, 25];

echo "Matched value from arrayOne \n";
print_r(array_intersect($arrayOne, $arrayTwo));
echo "Matched value and index from arrayOne  \n";
print_r(array_intersect_assoc($arrayOne, $arrayTwo));
echo "Not matched value from arrayOne  \n";
print_r(array_diff($arrayOne, $arrayTwo));
echo "Not matched value and index from arrayOne \n";
print_r(array_diff_assoc($arrayOne, $arrayTwo));




/**
 * array_walk(arrayName, 'functionName'); --- To work with every element of an array and print it. 
 * array_map('functionName', arrayName); --- To work with every element of an array and return it. 
 * array_filter(arrayName, 'functionName') --- work with every element, check and return filtered element. 
 * 
 */

    // Make square and Print //No return
    function square($number){
        
        printf("The square of %d is %d \n", $number, pow($number, 2));
    }

    // Make cube and return
    function cube($number){
        return pow($number, 3);
    }
    // check a name is start with 'S' or not. if true, then return the name.
    function findByS($name){
        return $name[0]=="S";
    }


 $array = [1, 2, 3, 4, 5, 6];
 $names = ['Sadia', 'Galib', 'Suma', 'Tarikul', 'Rostom', 'Sompa'];

 array_walk($array, 'square');

 echo PHP_EOL;

 $newArray =  array_map('cube', $array);
 print_r($newArray);

 echo PHP_EOL;
 
 $newNames = array_filter($names, 'findByS');
 print_r($newNames);