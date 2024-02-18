<?php
$string = "Hello World";

$newString =  substr($string, -5);

$string.=' '.$newString;
// echo $string;



/**PHP String replace:
 * str_replace("The element/elements I want to replace", "The Element/s I want to replace with", $the string, *Count*optional); This is case sensitive
 * 
 * str_ireplace("The element/elements I want to replace", "The Element/s I want to replace with", $the string, *Count*optional); This is not case sensitive
 * 
 * 
 * */ 

$message = "Hello! This is Galib Mia, your new instructor. Today we'll learn about PHP String replace operation.";

$newMessage = str_ireplace(array("Galib", "Mia"), array("Sadia", "Sultana Meem"), $message, $count);

// echo $newMessage;
// echo PHP_EOL;
// echo $count;



/**PHP String Trim:
 * trim($stringName); *Remove the unprintable elements from left and right side from the string.
 * trim($stringName, 'The element I want to trim') **The last section is optional.
 * 
 * ltrim($stringName); *Remove the unprintable elements from left side from the string.
 * rtrim($stringName); *Remove the unprintable elements from right side from the string.
 * 
 * */ 

$sampleString = " Hello, My name is Galib \n";
$trimmedString = trim($sampleString);
$trimmedString = trim($sampleString, ' ');
$trimmedString = ltrim($sampleString);
$trimmedString = rtrim($sampleString);
// echo $trimmedString;
// echo "Data";



?>